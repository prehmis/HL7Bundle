<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0301
 * Universal ID Type
 * HL7 version 2.5.1
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
    const RANDOM = 'RANDOM';
    const URI = 'URI';
    const UUID = 'UUID';
    const X400 = 'X400';
    const X500 = 'X500';
            
    public static function choices(): array
    {
        return [
            self::DNS => 'An Internet dotted name. Either in ASCII or as integers',
            self::GUID => 'Same as UUID.',
            self::HCD => 'The CEN Healthcare Coding Scheme Designator. (Identifiers used in DICOM follow this assignment scheme.)',
            self::HL7 => 'Reserved for future HL7 registration schemes',
            self::ISO => 'An International Standards Organization Object Identifier',
            self::RANDOM => 'Usually a base64 encoded string of random bits.',
            self::URI => 'Uniform Resource Identifier',
            self::UUID => 'The DCE Universal Unique Identifier',
            self::X400 => 'An X.400 MHS format identifier',
            self::X500 => 'An X.500 directory name',
            ];
    }
      
}