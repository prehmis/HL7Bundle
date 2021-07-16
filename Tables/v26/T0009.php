<?php
    
namespace Prehmis\HL7Bundle\Tables\v26;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0009
 * Ambulatory Status
 * HL7 version 2.6
 *
 */
final class T0009 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A0 = 'A0';
    const A1 = 'A1';
    const A2 = 'A2';
    const A3 = 'A3';
    const A4 = 'A4';
    const A5 = 'A5';
    const A6 = 'A6';
    const A7 = 'A7';
    const A8 = 'A8';
    const A9 = 'A9';
    const B1 = 'B1';
    const B2 = 'B2';
    const B3 = 'B3';
    const B4 = 'B4';
    const B5 = 'B5';
    const B6 = 'B6';
            
    public static function choices(): array
    {
        return [
            self::A0 => 'No functional limitations',
            self::A1 => 'Ambulates with assistive device',
            self::A2 => 'Wheelchair/stretcher bound',
            self::A3 => 'Comatose; non-responsive',
            self::A4 => 'Disoriented',
            self::A5 => 'Vision impaired',
            self::A6 => 'Hearing impaired',
            self::A7 => 'Speech impaired',
            self::A8 => 'Non-English speaking',
            self::A9 => 'Functional level unknown',
            self::B1 => 'Oxygen therapy',
            self::B2 => 'Special equipment (tubes, IVs, catheters)',
            self::B3 => 'Amputee',
            self::B4 => 'Mastectomy',
            self::B5 => 'Paraplegic',
            self::B6 => 'Pregnant',
            ];
    }
      
}