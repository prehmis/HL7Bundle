<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0076
 * Message Type
 * HL7 version 2.1
 *
 */
final class T0076 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ACK = 'ACK';
    const ARD = 'ARD';
    const BAR = 'BAR';
    const DSR = 'DSR';
    const MCF = 'MCF';
    const ORF = 'ORF';
    const ORM = 'ORM';
    const ORR = 'ORR';
    const ORU = 'ORU';
    const OSQ = 'OSQ';
    const UDM = 'UDM';
            
    public static function choices(): array
    {
        return [
            self::ACK => 'General Acknowledgment       CNT       II',
            self::ARD => 'Ancillary RPT (display)      ANR       VII',
            self::BAR => 'Add/change billing account   BLN       VI',
            self::DSR => 'Display response             QRY       V',
            self::MCF => 'Delayed acknowledgment       CNT       II',
            self::ORF => 'Observ. Result/record resp.  ANR       VII',
            self::ORM => 'Order                        ORD       IV',
            self::ORR => 'Order response message       ORD       IV',
            self::ORU => 'Observ. result/unsolicited   ANR       VII',
            self::OSQ => 'Order status query           ORD       IV',
            self::UDM => 'Unsolicited display          QRY       V',
            ];
    }
      
}