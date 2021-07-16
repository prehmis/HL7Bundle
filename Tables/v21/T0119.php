<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0119
 * Order Control Codes
 * HL7 version 2.1
 *
 */
final class T0119 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const CA = 'CA';
    const CH = 'CH';
    const CN = 'CN';
    const DC = 'DC';
    const DE = 'DE';
    const DR = 'DR';
    const HD = 'HD';
    const HR = 'HR';
    const NA = 'NA';
    const NW = 'NW';
    const OD = 'OD';
    const OK = 'OK';
    const OR = 'OR';
    const PA = 'PA';
    const RE = 'RE';
    const RO = 'RO';
    const RP = 'RP';
    const RR = 'RR';
    const RU = 'RU';
    const SN = 'SN';
    const SS = 'SS';
    const UD = 'UD';
    const UH = 'UH';
    const UR = 'UR';
    const UX = 'UX';
    const XR = 'XR';
    const XX = 'XX';
            
    public static function choices(): array
    {
        return [
            self::CA => 'Cancel order request',
            self::CH => 'Child order',
            self::CN => 'Combined result',
            self::DC => 'Discontinue order request',
            self::DE => 'Data Errors',
            self::DR => 'Discontinued as requested',
            self::HD => 'Hold order request',
            self::HR => 'On hold as requested',
            self::NA => 'Number assigned',
            self::NW => 'New order',
            self::OD => 'Order discontinued',
            self::OK => 'Order accepted and OK',
            self::OR => 'Released as requested',
            self::PA => 'Parent order',
            self::RE => 'Observations to follow',
            self::RO => 'Replacement order',
            self::RP => 'Order replace request',
            self::RR => 'Request received',
            self::RU => 'Replaced unsolicited',
            self::SN => 'Send filler number',
            self::SS => 'Send order status request',
            self::UD => 'Unable to discontinue',
            self::UH => 'Unable to put on hold',
            self::UR => 'Unable to release',
            self::UX => 'Unable to change',
            self::XR => 'Changed as requested',
            self::XX => 'Order changed, unsolicited',
            ];
    }
      
}