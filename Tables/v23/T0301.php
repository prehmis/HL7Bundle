<?php
    
namespace Prehmis\HL7Bundle\Tables\v23;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0301
 * Universal ID Type
 * HL7 version 2.3
 *
 */
final class T0301 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const DNS = 'DNS';
    const GUID = 'GUID';
    const HCD = 'HCD';
    const HL7 = 'HL7';
    const ISO = 'ISO';
    const L = 'L';
    const M = 'M';
    const N = 'N';
    const RANDOM = 'RANDOM';
    const UUID = 'UUID';
    const X400 = 'X400';
    const X500 = 'X500';
            
    public static function choices(): array
    {
        return [
            self::DNS => 'An Internet dotted name. Either in ASCII or as integers',
            self::GUID => 'Same as UUID',
            self::HCD => 'The CEN Healthcare Coding Scheme Designator. (Identifiers used in DICOM follow this assignment scheme.) ',
            self::HL7 => 'Reserved for future HL7 registration schemes',
            self::ISO => 'An International Standards Organization Object Identifier',
            self::L => 'These are reserved for locally defined coding schemes',
            self::M => 'These are reserved for locally defined coding schemes',
            self::N => 'These are reserved for locally defined coding schemes',
            self::RANDOM => 'Usually a base64 encoded string of random bits. The uniqueness depends on the length of the bits.  Mail systems often generate ASCII string  "unique names," from a combination of random bits and system names.  Obviously, such identifiers will not be constrained to the base64 character set ',
            self::UUID => 'The DCE Universal Unique Identifier ',
            self::X400 => 'An X.400 MHS format identifier',
            self::X500 => 'An X.500 directory name',
            ];
    }
      
}