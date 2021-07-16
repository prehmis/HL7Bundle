<?php
    
namespace Prehmis\HL7Bundle\Tables\v23;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0119
 * Order Control Codes
 * HL7 version 2.3
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
    const FU = 'FU';
    const HD = 'HD';
    const HR = 'HR';
    const LI = 'LI';
    const NA = 'NA';
    const NW = 'NW';
    const OC = 'OC';
    const OD = 'OD';
    const OE = 'OE';
    const OF = 'OF';
    const OH = 'OH';
    const OK = 'OK';
    const OR = 'OR';
    const PA = 'PA';
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
            self::AF => 'Order refill request approval',
            self::CA => 'Cancel order request',
            self::CH => 'Child order',
            self::CN => 'Combined result',
            self::CR => 'Canceled as requested',
            self::DC => 'Discontinue order request',
            self::DE => 'Data Errors',
            self::DF => 'Order refill request denied',
            self::FU => 'Order refilled or unsolicited',
            self::HD => 'Hold order request',
            self::HR => 'On hold as requested',
            self::LI => 'Link order to patient care message',
            self::NA => 'Number assigned',
            self::NW => 'New Order',
            self::OC => 'Order canceled',
            self::OD => 'Order discontinued',
            self::OE => 'Order released',
            self::OF => 'Order refilled as requested',
            self::OH => 'Order held',
            self::OK => 'Order accepted and OK',
            self::OR => 'Released as requested',
            self::PA => 'Parent order',
            self::RE => 'Observations to follow',
            self::RF => 'Refill order request',
            self::RL => 'Release previous hold',
            self::RO => 'Replacement order',
            self::RP => 'Order replace request',
            self::RQ => 'Replaced as requested',
            self::RR => 'Request received',
            self::RU => 'Replaced unsolicited',
            self::SC => 'Status changed',
            self::SN => 'Send order number',
            self::SR => 'Response to send order status request',
            self::SS => 'Send order status request',
            self::UA => 'Unable to accept order',
            self::UC => 'Unable to cancel',
            self::UF => 'Unable to refill',
            self::UH => 'Unable to put on hold',
            self::UM => 'Unable to replace',
            self::UN => 'Unlink order from patient care message',
            self::UR => 'Unable to release',
            self::UX => 'Unable to change',
            self::XO => 'Change order request',
            self::XR => 'Changed as requested',
            self::XX => 'Order changed or unsolicited',
            ];
    }
      
}