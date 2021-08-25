<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\Segment;
use Prehmis\HL7Bundle\HL7Service;
use Prehmis\HL7Bundle\Segments\FieldValidatorInterface;
use Prehmis\HL7Bundle\Exceptions\HL7Exception;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * Description of ValidatedSegmentAbstract
 *
 * @author MBERTELER
 */
abstract class ValidatedSegmentAbstract extends Segment
{
    /**
     * HL7 version used during validation
     * 
     * @var type 
     */
    protected $hl7Version = T0104::RELEASE_2_5;
    
    protected $validateFields = true;
        
    protected $customValidationClasses = [];
    
    protected $defaultValidationClasses = [];
    
    public function __construct(array $fields = null, array $options = [])
    {
        $this->extractValidationOptions($options);

        parent::__construct(static::SEGMENT_NAME, $fields);
    }
    
    protected function extractValidationOptions($options) 
    {
        $this->hl7Version = $options[HL7Service::HL7_VERSION] ?? T0104::RELEASE_2_5;

        $this->validateFields = $options[HL7Service::VALIDATE_FIELDS] ?? true;
        
        $this->setDefaultValidationClasses();
        
        if(isset($options[HL7Service::CUSTOM_VALIDATION_CLASSES][static::SEGMENT_NAME])) {
            foreach($options[HL7Service::CUSTOM_VALIDATION_CLASSES][static::SEGMENT_NAME] as $index => $fqn) {
                $this->customValidationClasses[$index] = $fqn;
            }
        }
    }
    
    /**
     * Set the validation class for a specific field
     * 
     * Set $fqn to '' to disable validation of a particular field
     * Set $fqn to Fully Qualified Classname or an array of FQN as 1st element and an argument as second.
     * eg [GenericClass::class, 'T001']
     * 
     * @param int $index
     * @param string|array $fqn
     */
    public function setValidationClass(int $index, $fqn)
    {
        $this->customValidationClasses[$index] = $fqn;
    }
    
    /**
     * 
     * @param int $index
     * @param type $value
     * @return Prehmis\HL7Bundle\Segments\Segment
     * @throws Prehmis\HL7Bundle\Exceptions\HL7Exception
     */
    public function setField(int $index, $value = ''): Segment
    {
        if($this->validateFields) {
            $error = $this->validateField($index, $value);
            if($error) {
                throw new HL7Exception($error, E_USER_ERROR);
            }
        }
        
        return parent::setField($index, $value);
    }
    
    public function validateFields(): ?array {
        
        $errors = [];
        foreach($this->fields as $index => $value) {
            $error = $this->validateField($index, $value);
            if($error) {
                $errors[] = $error;
            }
        }
        
        return count($errors) ? $errors : null;
    }
    
    private function validateField($index, $value): ?string {
//        if($index > $this->maximumFields()) {
//                return 'Field '.$index.' is not part of version '.$this->hl7Version;
//        }
        
        $validationClass = $this->getValidationClass($index);
        
        if(is_array($validationClass)) {
            $fqn = isset($validationClass[0]) ? $validationClass[0] : null;
            $argument = isset($validationClass[1]) ? $validationClass[1] : null;
        } else {
            $fqn = $validationClass;
            $argument = null;
        }
        
        if($fqn) {
            if(class_exists($fqn) && in_array(FieldValidatorInterface::class, class_implements($fqn))) {
                return $fqn::isInvalid($value, $this->hl7Version, $argument);
            } 
            return 'Validation class '.$fqn.' not found.';
        }

        return null;
    }
    
    /**
     * Return the class name of the validation class to use for a field
     * 
     * @param int $index
     * @return string|null
     */
    public function getValidationClass(int $index)
    {
        if(isset($this->customValidationClasses[$index])) {
            return !empty($this->customValidationClasses[$index]) ? $this->customValidationClasses[$index] : null;
        } elseif(isset($this->defaultValidationClasses[$index])) {
            return $this->defaultValidationClasses[$index];
        }
        
        return null;
    }
    
    public function setDefaultValidationClasses() {
        $this->defaultValidationClasses = [];
    }
    
    /**
     * Return the default validation classes used by this segment
     * 
     * @return array
     */
    public function getDefaultValidationClasses(): array {
        return $this->defaultValidationClasses;
    }
    
    /**
     * Return the custom validation classes used by this segment
     * 
     * @return array
     */
    public function getCustomValidationClasses(): array {
        return $this->customValidationClasses;
    }
}
