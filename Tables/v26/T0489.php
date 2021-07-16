<?php
    
namespace Prehmis\HL7Bundle\Tables\v26;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0489
 * Risk Codes
 * HL7 version 2.6
 *
 */
final class T0489 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AGGRESSIVE = 'AGG';
    const BIOHAZARD = 'BHZ';
    const BIOLOGICAL = 'BIO';
    const CORROSIVE = 'COR';
    const ESCAPE_RISK = 'ESC';
    const EXPLOSIVE = 'EXP';
    const MATERIALDANGERINFLAMMABLE = 'IFL';
    const MATERIALDANGERINFECTIOUS = 'INF';
    const INJURY_HAZARD = 'INJ';
    const POISON = 'POI';
    const RADIOACTIVE = 'RAD';
            
    public static function choices(): array
    {
        return [
            self::AGGRESSIVE => 'Aggressive',
            self::BIOHAZARD => 'Biohazard',
            self::BIOLOGICAL => 'Biological',
            self::CORROSIVE => 'Corrosive',
            self::ESCAPE_RISK => 'Escape Risk',
            self::EXPLOSIVE => 'Explosive',
            self::MATERIALDANGERINFLAMMABLE => 'MaterialDangerInflammable',
            self::MATERIALDANGERINFECTIOUS => 'MaterialDangerInfectious',
            self::INJURY_HAZARD => 'Injury Hazard',
            self::POISON => 'Poison',
            self::RADIOACTIVE => 'Radioactive',
            ];
    }
      
}