<?php
    
namespace Prehmis\HL7Bundle\Tables\v231;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0076
 * Message Type
 * HL7 version 2.3.1
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
    const CRM = 'CRM';
    const CSU = 'CSU';
    const DFT = 'DFT';
    const DOC = 'DOC';
    const DSR = 'DSR';
    const EDR = 'EDR';
    const EQQ = 'EQQ';
    const ERP = 'ERP';
    const MCF = 'MCF';
    const MDM = 'MDM';
    const MFD = 'MFD';
    const MFK = 'MFK';
    const MFN = 'MFN';
    const MFQ = 'MFQ';
    const MFR = 'MFR';
    const NMD = 'NMD';
    const NMQ = 'NMQ';
    const NMR = 'NMR';
    const ORF = 'ORF';
    const ORM = 'ORM';
    const ORR = 'ORR';
    const ORU = 'ORU';
    const OSQ = 'OSQ';
    const OSR = 'OSR';
    const PEX = 'PEX';
    const PGL = 'PGL';
    const PIN = 'PIN';
    const PPG = 'PPG';
    const PPP = 'PPP';
    const PPR = 'PPR';
    const PPT = 'PPT';
    const PPV = 'PPV';
    const PRR = 'PRR';
    const PTR = 'PTR';
    const QCK = 'QCK';
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
    const ROR = 'ROR';
    const RPA = 'RPA';
    const RPI = 'RPI';
    const RPL = 'RPL';
    const RPR = 'RPR';
    const RQA = 'RQA';
    const RQC = 'RQC';
    const RQI = 'RQI';
    const RQP = 'RQP';
    const RQQ = 'RQQ';
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
    const SUR = 'SUR';
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
            self::ARD => 'Ancillary RPT (display) (for backward compatibility only)',
            self::BAR => 'Add/change billing account',
            self::CRM => 'Clinical study registration',
            self::CSU => 'Unsolicited clinical study data',
            self::DFT => 'Detail financial transaction',
            self::DOC => 'Document query',
            self::DSR => 'Display response',
            self::EDR => 'Enhanced display response',
            self::EQQ => 'Embedded query language query',
            self::ERP => 'Event replay response',
            self::MCF => 'Delayed acknowledgment',
            self::MDM => 'Documentation message',
            self::MFD => 'Master files delayed application acknowledgment',
            self::MFK => 'Master files application acknowledgment',
            self::MFN => 'Master files notification',
            self::MFQ => 'Master files query',
            self::MFR => 'Master files query response',
            self::NMD => 'Network management data',
            self::NMQ => 'Network management query',
            self::NMR => 'Network management response',
            self::ORF => 'Observ. result/record response',
            self::ORM => 'Order message',
            self::ORR => 'Order acknowledgment message',
            self::ORU => 'Observ result/unsolicited',
            self::OSQ => 'Order status query',
            self::OSR => 'Order status response',
            self::PEX => 'Product experience',
            self::PGL => 'Patient goal',
            self::PIN => 'Patient insurance information',
            self::PPG => 'Patient pathway (goal-oriented) message',
            self::PPP => 'Patient pathway (problem-oriented) message',
            self::PPR => 'Patient problem',
            self::PPT => 'Patient pathway (goal oriented) response',
            self::PPV => 'Patient goal response',
            self::PRR => 'Patient problem response',
            self::PTR => 'Patient pathway (problem-oriented) response',
            self::QCK => 'Query general acknowledgment',
            self::QRY => 'Query, original mode',
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
            self::ROR => 'Pharmacy prescription order response',
            self::RPA => 'Return patient authorization',
            self::RPI => 'Return patient information',
            self::RPL => 'Return patient display list',
            self::RPR => 'Return patient list',
            self::RQA => 'Request patient authorization',
            self::RQC => 'Request clinical information',
            self::RQI => 'Request patient information',
            self::RQP => 'Request patient demographics',
            self::RQQ => 'Event replay query',
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
            self::SUR => 'Summary product experience report',
            self::TBR => 'Tabular data response',
            self::UDM => 'Unsolicited display message',
            self::VQQ => 'Virtual table query',
            self::VXQ => 'Query for vaccination record',
            self::VXR => 'Vaccination query record response',
            self::VXU => 'Unsolicited vaccination record update',
            self::VXX => 'Vaccination query response with multiple PID matches',
            ];
    }
      
}