<?php
    
namespace Prehmis\HL7Bundle\Tables\v23;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0076
 * Message Type
 * HL7 version 2.3
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
    const CNQ = 'CNQ';
    const CSU = 'CSU';
    const DFT = 'DFT';
    const DSR = 'DSR';
    const EDR = 'EDR';
    const EQQ = 'EQQ';
    const ERP = 'ERP';
    const ERQ = 'ERQ';
    const MCF = 'MCF';
    const MDM = 'MDM';
    const MFD = 'MFD';
    const MFK = 'MFK';
    const MFN = 'MFN';
    const MFQ = 'MFQ';
    const MFR = 'MFR';
    const ORF = 'ORF';
    const ORM = 'ORM';
    const ORR = 'ORR';
    const ORU = 'ORU';
    const OSQ = 'OSQ';
    const OSR = 'OSR';
    const PEX = 'PEX';
    const PGL = 'PGL';
    const PGQ = 'PGQ';
    const PGR = 'PGR';
    const PIN = 'PIN';
    const PPP = 'PPP';
    const PPR = 'PPR';
    const PPT = 'PPT';
    const PPV = 'PPV';
    const PRQ = 'PRQ';
    const PRR = 'PRR';
    const PTQ = 'PTQ';
    const PTR = 'PTR';
    const PTU = 'PTU';
    const PTV = 'PTV';
    const QRY = 'QRY';
    const RAR = 'RAR';
    const RAS = 'RAS';
    const RCI = 'RCI';
    const RCL = 'RCL';
    const RDE = 'RDE';
    const RDR = 'RDR';
    const RDS = 'RDS';
    const REF = 'REF';
    const RER = 'RER';
    const RGR = 'RGR';
    const RGV = 'RGV';
    const ROC = 'ROC';
    const ROD = 'ROD';
    const ROR = 'ROR';
    const RPA = 'RPA';
    const RPI = 'RPI';
    const RPL = 'RPL';
    const RPR = 'RPR';
    const RQA = 'RQA';
    const RQI = 'RQI';
    const RRA = 'RRA';
    const RRD = 'RRD';
    const RRE = 'RRE';
    const RRG = 'RRG';
    const RRI = 'RRI';
    const SIU = 'SIU';
    const SPQ = 'SPQ';
    const SQM = 'SQM';
    const SQR = 'SQR';
    const SRM = 'SRM';
    const SRR = 'SRR';
    const TBR = 'TBR';
    const UDM = 'UDM';
    const VQQ = 'VQQ';
    const VXQ = 'VXQ';
    const VXR = 'VXR';
    const VXU = 'VXU';
    const VXX = 'VXX';
            
    public static function choices(): array
    {
        return [
            self::ACK => 'General acknowledgment message',
            self::ADR => 'ADT response',
            self::ADT => 'ADT message',
            self::ARD => 'Ancillary RPT (display)',
            self::BAR => 'Add/change billing account',
            self::CNQ => 'Cancel query',
            self::CSU => 'Unsolicited clinical study data',
            self::DFT => 'Detail financial transaction',
            self::DSR => 'Display response',
            self::EDR => 'Enhanced display response',
            self::EQQ => 'Embedded query language query',
            self::ERP => 'Event replay response',
            self::ERQ => 'Event replay query',
            self::MCF => 'Delayed acknowledgment',
            self::MDM => 'Documentation message',
            self::MFD => 'Master files delayed application acknowledgment',
            self::MFK => 'Master files application acknowledgment',
            self::MFN => 'Master files notification',
            self::MFQ => 'Master files query',
            self::MFR => 'Master files query response',
            self::ORF => 'Observation result/record response',
            self::ORM => 'Order message',
            self::ORR => 'Order acknowledgment message',
            self::ORU => 'Observation result/unsolicited',
            self::OSQ => 'Order status query',
            self::OSR => 'Order status response',
            self::PEX => 'Product experience',
            self::PGL => 'Patient goal',
            self::PGQ => 'Patient goal query',
            self::PGR => 'Patient goal response',
            self::PIN => 'Patient information',
            self::PPP => 'Patient pathway (problem-oriented)',
            self::PPR => 'Patient problem',
            self::PPT => 'Patient pathway (goal oriented)',
            self::PPV => 'Patient goal response',
            self::PRQ => 'Patient care problem query',
            self::PRR => 'Patient problem response',
            self::PTQ => 'Patient pathway (problem-oriented) query',
            self::PTR => 'Patient pathway (problem-oriented) response',
            self::PTU => 'Patient pathway (goal-oriented) query',
            self::PTV => 'Patient pathway (goal-oriented) response',
            self::QRY => 'Query',
            self::RAR => 'Pharmacy administration information',
            self::RAS => 'Pharmacy administration message',
            self::RCI => 'Return clinical information',
            self::RCL => 'Return clinical list',
            self::RDE => 'Pharmacy encoded order message',
            self::RDR => 'Pharmacy dispense information',
            self::RDS => 'Pharmacy dispense message',
            self::REF => 'Patient referral',
            self::RER => 'Pharmacy encoded order information',
            self::RGR => 'Pharmacy dose information',
            self::RGV => 'Pharmacy give message',
            self::ROC => 'Request clinical information',
            self::ROD => 'Request patient demographics',
            self::ROR => 'Pharmacy prescription order response',
            self::RPA => 'Return patient authorization',
            self::RPI => 'Return patient information',
            self::RPL => 'Return patient display list',
            self::RPR => 'Return patient list',
            self::RQA => 'Request patient authorization',
            self::RQI => 'Request patient information',
            self::RRA => 'Pharmacy administration acknowledgment',
            self::RRD => 'Pharmacy dispense acknowledgment',
            self::RRE => 'Pharmacy encoded order acknowledgment',
            self::RRG => 'Pharmacy give acknowledgment',
            self::RRI => 'Return patient referral',
            self::SIU => 'Schedule information unsolicited',
            self::SPQ => 'Stored procedure request',
            self::SQM => 'Schedule query',
            self::SQR => 'Schedule query response',
            self::SRM => 'Schedule request',
            self::SRR => 'Scheduled request response',
            self::TBR => 'Tabular response',
            self::UDM => 'Unsolicited display message',
            self::VQQ => 'Virtual table query',
            self::VXQ => 'Query for vaccination record',
            self::VXR => 'Vaccination query record response',
            self::VXU => 'Unsolicited vaccination record update',
            self::VXX => 'Vaccination query response with multiple PID matches',
            ];
    }
      
}