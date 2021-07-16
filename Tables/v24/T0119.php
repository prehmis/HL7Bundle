<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0119
 * Order Control Codes
 * HL7 version 2.4
 *
 */
final class T0119 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ORR_O02 = 'AF';
    const ORM_O01 = 'CA';
    const ORM_O01 = 'CH';
    const ORU_R01 = 'CN';
    const ORR_O02 = 'CR';
    const ORM_O01 = 'DC';
    const ORS_O06 = 'DE';
    const ORR_O02 = 'DF';
    const ORR_O02 = 'DR';
    const ORM_O01 = 'FU';
    const ORM_O01 = 'HD';
    const ORD_O04 = 'HR';
    const OMP_O09 = 'LI';
    const ORR_O02 = 'NA';
    const ORM_O01 = 'NW';
    const ORM_O01 = 'OC';
    const ORM_O01 = 'OD';
    const ORM_O01 = 'OE';
    const ORR_O02 = 'OF';
    const ORM_O01 = 'OH';
    const ORR_O02 = 'OK';
    const ORR_O02 = 'OR';
    const ORM_O01 = 'PA';
    const ORM_O01 = 'PR';
    const ORM_O01 = 'RE';
    const ORM_O01 = 'RF';
    const ORM_O01 = 'RL';
    const ORM_O01 = 'RO';
    const ORM_O01 = 'RP';
    const ORR_O02 = 'RQ';
    const ORR_O02 = 'RR';
    const ORM_O01 = 'RU';
    const ORM_O01 = 'SC';
    const ORM_O01 = 'SN';
    const ORR_O02 = 'SR';
    const ORM_O01 = 'SS';
    const RRG_O16 = 'UA';
    const ORD_O04 = 'UC';
    const ORD_O04 = 'UD';
    const ORR_O02 = 'UF';
    const ORR_O02 = 'UH';
    const ORG_O20 = 'UM';
    const ORM_O01 = 'UN';
    const ORD_O04 = 'UR';
    const ORR_O02 = 'UX';
    const OMP_O09 = 'XO';
    const ORR_O02 = 'XR';
    const ORM_O01 = 'XX';
            
    public static function choices(): array
    {
        return [
            self::ORR_O02 => 'ORR^O02',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORU_R01 => 'ORU^R01',
            self::ORR_O02 => 'ORR^O02',
            self::ORM_O01 => 'ORM^O01',
            self::ORS_O06 => 'ORS^O06',
            self::ORR_O02 => 'ORR^O02',
            self::ORR_O02 => 'ORR^O02',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORD_O04 => 'ORD^O04',
            self::OMP_O09 => 'OMP^O09',
            self::ORR_O02 => 'ORR^O02',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORR_O02 => 'ORR^O02',
            self::ORM_O01 => 'ORM^O01',
            self::ORR_O02 => 'ORR^O02',
            self::ORR_O02 => 'ORR^O02',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORR_O02 => 'ORR^O02',
            self::ORR_O02 => 'ORR^O02',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORM_O01 => 'ORM^O01',
            self::ORR_O02 => 'ORR^O02',
            self::ORM_O01 => 'ORM^O01',
            self::RRG_O16 => 'RRG^O16',
            self::ORD_O04 => 'ORD^O04',
            self::ORD_O04 => 'ORD^O04',
            self::ORR_O02 => 'ORR^O02',
            self::ORR_O02 => 'ORR^O02',
            self::ORG_O20 => 'ORG^O20',
            self::ORM_O01 => 'ORM^O01',
            self::ORD_O04 => 'ORD^O04',
            self::ORR_O02 => 'ORR^O02',
            self::OMP_O09 => 'OMP^O09',
            self::ORR_O02 => 'ORR^O02',
            self::ORM_O01 => 'ORM^O01',
            ];
    }
      
}