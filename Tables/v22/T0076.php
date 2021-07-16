<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0076
 * Message Type
 * HL7 version 2.2
 *
 */
final class T0076 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ACK = 'ACK';
    const ADR = 'ADR';
    const ADT = 'ADT';
    const ARD = 'ARD';
    const BAR = 'BAR';
    const DFT = 'DFT';
    const DSR = 'DSR';
    const MCF = 'MCF';
    const MFD = 'MFD';
    const MFK = 'MFK';
    const MFN = 'MFN';
    const MFR = 'MFR';
    const NMD = 'NMD';
    const NMQ = 'NMQ';
    const NMR = 'NMR';
    const ORF = 'ORF';
    const ORM = 'ORM';
    const ORR = 'ORR';
    const ORU = 'ORU';
    const OSQ = 'OSQ';
    const QRY = 'QRY';
    const RAR = 'RAR';
    const RAS = 'RAS';
    const RDE = 'RDE';
    const RDR = 'RDR';
    const RDS = 'RDS';
    const RER = 'RER';
    const RGR = 'RGR';
    const RGV = 'RGV';
    const ROR = 'ROR';
    const RRA = 'RRA';
    const RRD = 'RRD';
    const RRE = 'RRE';
    const RRG = 'RRG';
    const UDM = 'UDM';
            
    public static function choices(): array
    {
        return [
            self::ACK => 'General acknowledgement message',
            self::ADR => 'ADT response',
            self::ADT => 'ADT message',
            self::ARD => 'Ancillary report (display)',
            self::BAR => 'Add / change billing account',
            self::DFT => 'Detail financial transaction',
            self::DSR => 'Display response',
            self::MCF => 'Delayed acknowledgement',
            self::MFD => 'Master files delayed application acknowledgement',
            self::MFK => 'Master file application acknowledgement',
            self::MFN => 'Master files notification',
            self::MFR => 'Master files response',
            self::NMD => 'Network management data',
            self::NMQ => 'Network management query',
            self::NMR => 'Network management response',
            self::ORF => 'Observational result (record response)',
            self::ORM => 'Order message',
            self::ORR => 'Order acknowledgement message',
            self::ORU => 'Observational result (unsolicited)',
            self::OSQ => 'Order status query',
            self::QRY => 'Query',
            self::RAR => 'Pharmacy administration information',
            self::RAS => 'Pharmacy administration message',
            self::RDE => 'Pharmacy encoded order message',
            self::RDR => 'Pharmacy dispense information',
            self::RDS => 'Pharmacy dispense message',
            self::RER => 'Pharmacy encoded order information',
            self::RGR => 'Pharmacy dose information',
            self::RGV => 'Pharmacy give message',
            self::ROR => 'Pharmacy prescription order response',
            self::RRA => 'Pharmacy administration acknowledgment',
            self::RRD => 'Pharmacy dispense acknowledgment',
            self::RRE => 'Pharmacy encoded order acknowledgment',
            self::RRG => 'Pharmacy give acknowledgment',
            self::UDM => 'Unsolicited display message',
            ];
    }
      
}