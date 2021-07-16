<?php
    
namespace Prehmis\HL7Bundle\Tables\v271;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0119
 * Order Control Codes
 * HL7 version 2.7.1
 *
 */
final class T0119 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AF = 'AF';
    const CA = 'CA';
    const CH = 'CH';
    const CN = 'CN';
    const CR = 'CR';
    const DC = 'DC';
    const DE = 'DE';
    const DF = 'DF';
    const DR = 'DR';
    const FU = 'FU';
    const HD = 'HD';
    const HR = 'HR';
    const LI = 'LI';
    const MC = 'MC';
    const NA = 'NA';
    const NW = 'NW';
    const OC = 'OC';
    const OD = 'OD';
    const OE = 'OE';
    const OF = 'OF';
    const OH = 'OH';
    const OK = 'OK';
    const OP = 'OP';
    const OR = 'OR';
    const PA = 'PA';
    const PR = 'PR';
    const PY = 'PY';
    const RE = 'RE';
    const RF = 'RF';
    const RL = 'RL';
    const RO = 'RO';
    const RP = 'RP';
    const RQ = 'RQ';
    const RR = 'RR';
    const RU = 'RU';
    const SC = 'SC';
    const SN = 'SN';
    const SR = 'SR';
    const SS = 'SS';
    const UA = 'UA';
    const UC = 'UC';
    const UD = 'UD';
    const UF = 'UF';
    const UH = 'UH';
    const UM = 'UM';
    const UN = 'UN';
    const UR = 'UR';
    const UX = 'UX';
    const XO = 'XO';
    const XR = 'XR';
    const XX = 'XX';
            
    public static function choices(): array
    {
        return [
            self::AF => 'Order/service refill request approval',
            self::CA => 'Cancel order/service request',
            self::CH => 'Child order/service',
            self::CN => 'Combined result',
            self::CR => 'Canceled as requested',
            self::DC => 'Discontinue order/service request',
            self::DE => 'Data errors',
            self::DF => 'Order/service refill request denied',
            self::DR => 'Discontinued as requested',
            self::FU => 'Order/service refilled, unsolicited',
            self::HD => 'Hold order request',
            self::HR => 'On hold as requested',
            self::LI => 'Link order/service to patient care problem or goal',
            self::MC => 'Miscellaneous Charge - not associated with an order',
            self::NA => 'Number assigned',
            self::NW => 'New order/service',
            self::OC => 'Order/service canceled',
            self::OD => 'Order/service discontinued',
            self::OE => 'Order/service released',
            self::OF => 'Order/service refilled as requested',
            self::OH => 'Order/service held',
            self::OK => 'Order/service accepted & OK',
            self::OP => 'Notification of order for outside dispense',
            self::OR => 'Released as requested',
            self::PA => 'Parent order/service',
            self::PR => 'Previous Results with new order/service',
            self::PY => 'Notification of replacement order for outside dispense',
            self::RE => 'Observations/Performed Service to follow',
            self::RF => 'Refill order/service request',
            self::RL => 'Release previous hold',
            self::RO => 'Replacement order',
            self::RP => 'Order/service replace request',
            self::RQ => 'Replaced as requested',
            self::RR => 'Request received',
            self::RU => 'Replaced unsolicited',
            self::SC => 'Status changed',
            self::SN => 'Send order/service number',
            self::SR => 'Response to send order/service status request',
            self::SS => 'Send order/service status request',
            self::UA => 'Unable to accept order/service',
            self::UC => 'Unable to cancel',
            self::UD => 'Unable to discontinue',
            self::UF => 'Unable to refill',
            self::UH => 'Unable to put on hold',
            self::UM => 'Unable to replace',
            self::UN => 'Unlink order/service from patient care problem or goal',
            self::UR => 'Unable to release',
            self::UX => 'Unable to change',
            self::XO => 'Change order/service request',
            self::XR => 'Changed as requested',
            self::XX => 'Order/service changed, unsol.',
            ];
    }
      
}