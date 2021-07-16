<?php
    
namespace Prehmis\HL7Bundle\Tables\v23;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0211
 * Alternate Character Sets
 * HL7 version 2.3
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
    const JAS2020 = 'JAS2020';
    const JIS_X_0202 = 'JIS X 0202';
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
            self::JAS2020 => 'A subset of ISO2020 used for most Kanjii transmissions',
            self::JIS_X_0202 => 'ISO 2022 with escape sequences for Kanjii',
            self::UNICODE => 'The world wide character standard from ISO/IEC 10646-1-1993[3]',
            ];
    }
      
}