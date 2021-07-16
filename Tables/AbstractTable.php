<?php

namespace Prehmis\HL7Bundle\Tables;

use Prehmis\HL7Bundle\Exceptions\HL7Exception;
use Elao\Enum\ReadableEnum;
use Prehmis\HL7Bundle\Tables\v28\T0104 as HL7VersionEnum;

/**
 * Description of abstractTable
 *
 * @author MBERTELER
 */
class AbstractTable
{
    /**
     * 
     * @param type $value
     * @param type $field
     * @param type $hl7Version
     * @return null|string
     */
    public static function isInvalid($value, $hl7Version): ?string
    {
        if(HL7VersionEnum::accepts($hl7Version)) {
            
            $class = get_called_class();
            if ($pos = strrpos($class, '\\')) {
                $classname = substr($class, $pos + 1);
                $namespace = substr($class, 0, $pos + 1);
            } else {
                $classname = $class;
                $namespace = '';
            }
            
            $tableClass = $namespace.'v'.str_replace('.', '', $hl7Version).'\\'.$classname;
            
            if(class_exists($tableClass)) {
                if(method_exists($tableClass, 'accepts') && method_exists($tableClass, 'values')) {
                    if(false == $tableClass::accepts($value)) {
                        return 'Value ['.$value.'] is not valid';
                    }
                    return null;
                } else {
                    return 'Validation failed due to internal error';
                }

                return null;
            } else {
                return 'Validation class '.$tableClass.' not found. This field is most likely not part of version '.$hl7Version;
            }
        }
        
        return 'HL7 version '.$hl7Version.' not supported';
    }
}
