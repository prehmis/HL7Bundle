<?php
    
namespace Prehmis\HL7Bundle\Tables\v231;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0211
 * Alternate Character Sets
 * HL7 version 2.3.1
 *
 */
final class T0211 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ISO_8859_1 = '8859/1';
    const ISO_8859_2 = '8859/2';
    const ISO_8859_3 = '8859/3';
    const ISO_8859_4 = '8859/4';
    const ISO_8859_5 = '8859/5';
    const ISO_8859_6 = '8859/6';
    const ISO_8859_7 = '8859/7';
    const ISO_8859_8 = '8859/8';
    const ISO_8859_9 = '8859/9';
    const ASCII = 'ASCII';
    const ISO_IR14 = 'ISO IR14';
    const ISO_IR159 = 'ISO IR159';
    const ISO_IR87 = 'ISO IR87';
    const UNICODE = 'UNICODE';
            
    public static function choices(): array
    {
        return [
            self::ISO_8859_1 => 'The printable characters from the ISO 8859/1 Character set',
            self::ISO_8859_2 => 'The printable characters from the ISO 8859/2 Character set',
            self::ISO_8859_3 => 'The printable characters from the ISO 8859/3 Character set',
            self::ISO_8859_4 => 'The printable characters from the ISO 8859/4 Character set',
            self::ISO_8859_5 => 'The printable characters from the ISO 8859/5 Character set',
            self::ISO_8859_6 => 'The printable characters from the ISO 8859/6 Character set',
            self::ISO_8859_7 => 'The printable characters from the ISO 8859/7 Character set',
            self::ISO_8859_8 => 'The printable characters from the ISO 8859/8 Character set',
            self::ISO_8859_9 => 'The printable characters from the ISO 8859/9 Character set',
            self::ASCII => 'The printable 7-bit ASCII character set. (This is the default if this field is omitted)',
            self::ISO_IR14 => 'Code for Information Exchange (one byte)(JIS X 02011976).  Note that the code contains a  space, i.e. "ISO IR14".',
            self::ISO_IR159 => 'Code of the supplementary Japanese Graphic Character set for information interchange (JIS X 0212-1990), Note that the code contains a space, i.e. "ISO IR159".',
            self::ISO_IR87 => 'Code for the Japanese Graphic Character set for information interchange (JIS X 0208-1990), Note that the code contains a space, i.e. "ISO IR87".',
            self::UNICODE => 'The world wide character standard from ISO/IEC 10646-1-1993[3]',
            ];
    }
      
}