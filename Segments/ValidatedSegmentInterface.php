<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Prehmis\HL7Bundle\Segments;

/**
 *
 * @author MBERTELER
 */
interface ValidatedSegmentInterface extends SegmentInterface
{
    /**
     * Return the maximum amount of fields allowed by the hl7 version
     * 
     * @return int
     */
    public function getMaximumFields(): int;
    
    /**
     * Return an array of default validation classes for fields
     * 
     * @return array
     */
    public function getDefaultValidationClasses(): array;
    
    /**
     * Return an array of custom validation classes for fields
     * 
     * @return array
     */
    public function getCustomValidationClasses(): array;
    
    /**
     * Return the class name of the validation class to use for a field
     * 
     * @param int $index
     * @return string|array|null
     */    
    public function getValidationClass(int $index);
    
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
    public function setValidationClass(int $index, $fqn);
    
    /**
     * Validate each field and return the errors
     * 
     * @return array|null
     */
    public function validateFields(): ?array;

}
