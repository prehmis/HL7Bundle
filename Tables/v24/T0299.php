<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0299
 * Encoding
 * HL7 version 2.4
 *
 */
final class T0299 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A = 'A';
    const BASE64 = 'BASE64';
    const HEX = 'HEX';
            
    public static function choices(): array
    {
        return [
            self::A => 'No encoding - data are displayable ASCII characters.',
            self::BASE64 => 'Encoding as defined by MIME (Multipurpose Internet Mail Extensions) standard RFC 1521.  Four consecutive ASCII characters represent three consecutive octets of binary data.  Base64 utilizes a 65-character subset of US-ASCII, consisting of both the upper and lower case alphabetic characters, digits "0" through “9,” “+,” “/,” and “=.”.',
            self::HEX => 'Hexadecimal encoding - consecutive pairs of hexadecimal digits represent consecutive single octets.',
            ];
    }
      
}