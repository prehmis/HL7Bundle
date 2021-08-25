<?php

namespace Prehmis\HL7Bundle\Segments;

/**
 *
 * @author MBERTELER
 */
interface FieldValidatorInterface
{
    /**
     * Return an error string or null if there is no error
     * 
     * @param mixed $value
     * @param mixed $hl7Version
     * @param mixed $argument
     * @return null|string
     */
    public static function isInvalid($value, $hl7Version, $argument): ?string;
}
