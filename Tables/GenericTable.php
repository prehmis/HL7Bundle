<?php

namespace Prehmis\HL7Bundle\Tables;

use Prehmis\HL7Bundle\Segments\FieldValidatorInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Elao\Enum\EnumInterface;

/**
 * Description of GenericTable
 *
 * @author MBERTELER
 */
class GenericTable implements FieldValidatorInterface
{
    /**
     * 
     * @param mixed $value
     * @param string $hl7Version
     * @param string $tableName
     * @return null|string
     */
    public static function isInvalid($value, $hl7Version, $tableName): ?string
    {
        if(T0104::accepts($hl7Version)) {
            
            $fqn = 'Prehmis\\HL7Bundle\\Tables\\v'.str_replace('.', '', $hl7Version).'\\'.$tableName;
            
            if(class_exists($fqn)) {
                
                if(in_array(EnumInterface::class, class_implements($fqn))) {
                    if(false == $fqn::accepts($value)) {
                        return 'Value ['.$value.'] is not valid';
                    }
                    return null;
                } else {
                    return 'Validation class '.$fqn.' does not implement EnumInterface';
                }

                return null;
            } else {
                return 'Validation class '.$fqn.' not found. This field is most likely not part of version '.$hl7Version;
            }
        }
        
        return 'HL7 version '.$hl7Version.' not supported';
    }
}
