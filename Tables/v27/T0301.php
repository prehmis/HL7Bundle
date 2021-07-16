<?php
    
namespace Prehmis\HL7Bundle\Tables\v27;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0301
 * Universal ID Type
 * HL7 version 2.7
 *
 */
final class T0301 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const CLIA = 'CLIA';
    const CLIP = 'CLIP';
    const DNS = 'DNS';
    const EUI64 = 'EUI64';
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
            self::CLIA => 'Clinical Laboratory Improvement Amendments. Allows for the ability to designate organization identifier as a "CLIA" assigned number (for labs)',
            self::CLIP => 'Clinical laboratory Improvement Program. Allows for the ability to designate organization identifier as a "CLIP" assigned number (for labs).Â  Used by US Department of Defense.',
            self::DNS => 'An Internet host name, in accordance with RFC 1035; or an IP address. Either in ASCII or as integers, with periods between components ("dotted" notation).',
            self::EUI64 => 'IEEE 64-bit Extended Unique Identifier is comprised of a  24-bit company identifier and a 40-bit instance identifier.  The value shall be formatted as 16 ASCII HEX digits, for example, "AABBCC1122334455".  The 24-bit company identifier, formally known as ',
            self::GUID => 'Same as UUID.',
            self::HCD => 'The CEN Healthcare Coding Scheme Designator',
            self::HL7 => 'HL7 registration schemes',
            self::ISO => 'An International Standards Organization Object Identifier (OID), in accordance with ISO/IEC 8824.  Formatted as decimal digits separated by periods; recommended limit of 64 characters',
            self::RANDOM => 'Usually a base64 encoded string of random bits.',
            self::URI => 'Uniform Resource Identifier',
            self::UUID => 'The DCE Universal Unique Identifier, in accordance with RFC 4122. Recommended format is 32 hexadecimal digits separated by hyphens, in the digit grouping 8-4-4-4-12',
            self::X400 => 'An X.400 MHS identifier. Recommended format is in accordance with RFC 1649',
            self::X500 => 'An X.500 directory name',
            ];
    }
      
}