<?php
    
namespace Prehmis\HL7Bundle\Tables\v26;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0211
 * Alternate Character Sets
 * HL7 version 2.6
 *
 */
final class T0211 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ISO_8859_1 = '8859/1';
    const ISO_8859_15 = '8859/15';
    const ISO_8859_2 = '8859/2';
    const ISO_8859_3 = '8859/3';
    const ISO_8859_4 = '8859/4';
    const ISO_8859_5 = '8859/5';
    const ISO_8859_6 = '8859/6';
    const ISO_8859_7 = '8859/7';
    const ISO_8859_8 = '8859/8';
    const ISO_8859_9 = '8859/9';
    const ASCII = 'ASCII';
    const BIG_5 = 'BIG-5';
    const CNS_11643_1992 = 'CNS 11643-1992';
    const GB_18030_2000 = 'GB 18030-2000';
    const ISO_IR14 = 'ISO IR14';
    const ISO_IR159 = 'ISO IR159';
    const ISO_IR87 = 'ISO IR87';
    const KS_X_1001 = 'KS X 1001';
    const UNICODE = 'UNICODE';
    const UNICODE_UTF_16 = 'UNICODE UTF-16';
    const UNICODE_UTF_32 = 'UNICODE UTF-32';
    const UNICODE_UTF_8 = 'UNICODE UTF-8';
            
    public static function choices(): array
    {
        return [
            self::ISO_8859_1 => 'The printable characters from the ISO 8859/1 Character set',
            self::ISO_8859_15 => 'The printable characters from the ISO 8859/15 (Latin-15)',
            self::ISO_8859_2 => 'The printable characters from the ISO 8859/2 Character set',
            self::ISO_8859_3 => 'The printable characters from the ISO 8859/3 Character set',
            self::ISO_8859_4 => 'The printable characters from the ISO 8859/4 Character set',
            self::ISO_8859_5 => 'The printable characters from the ISO 8859/5 Character set',
            self::ISO_8859_6 => 'The printable characters from the ISO 8859/6 Character set',
            self::ISO_8859_7 => 'The printable characters from the ISO 8859/7 Character set',
            self::ISO_8859_8 => 'The printable characters from the ISO 8859/8 Character set',
            self::ISO_8859_9 => 'The printable characters from the ISO 8859/9 Character set',
            self::ASCII => 'The printable 7-bit ASCII character set.',
            self::BIG_5 => 'Code for Taiwanese Character Set (BIG-5)',
            self::CNS_11643_1992 => 'Code for Taiwanese Character Set (CNS 11643-1992)',
            self::GB_18030_2000 => 'Code for Chinese Character Set (GB 18030-2000)',
            self::ISO_IR14 => 'Code for Information Exchange (one byte)(JIS X 0201-1976).',
            self::ISO_IR159 => 'Code of the supplementary Japanese Graphic Character set for information interchange (JIS X 0212-1990).',
            self::ISO_IR87 => 'Code for the Japanese Graphic Character set for information interchange (JIS X 0208-1990),',
            self::KS_X_1001 => 'Code for Korean Character Set (KS X 1001)',
            self::UNICODE => 'The world wide character standard from ISO/IEC 10646-1-1993[6]',
            self::UNICODE_UTF_16 => 'UCS Transformation Format, 16-bit form',
            self::UNICODE_UTF_32 => 'UCS Transformation Format, 32-bit form',
            self::UNICODE_UTF_8 => 'UCS Transformation Format, 8-bit form',
            ];
    }
      
}