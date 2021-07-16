<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0076
 * Message Type
 * HL7 version 2.4
 *
 */
final class T0076 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ACK = 'ACK';
    const ADR = 'ADR';
    const ADT = 'ADT';
    const BAR = 'BAR';
    const CRM = 'CRM';
    const CSU = 'CSU';
    const DFT = 'DFT';
    const DOC = 'DOC';
    const DSR = 'DSR';
    const EAC = 'EAC';
    const EAN = 'EAN';
    const EAR = 'EAR';
    const EDR = 'EDR';
    const EQQ = 'EQQ';
    const ERP = 'ERP';
    const ESR = 'ESR';
    const ESU = 'ESU';
    const INR = 'INR';
    const INU = 'INU';
    const LSR = 'LSR';
    const LSU = 'LSU';
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
    const OMD = 'OMD';
    const OMG = 'OMG';
    const OML = 'OML';
    const OMN = 'OMN';
    const OMP = 'OMP';
    const OMS = 'OMS';
    const ORD = 'ORD';
    const ORF = 'ORF';
    const ORG = 'ORG';
    const ORL = 'ORL';
    const ORM = 'ORM';
    const ORN = 'ORN';
    const ORP = 'ORP';
    const ORR = 'ORR';
    const ORS = 'ORS';
    const ORU = 'ORU';
    const OSQ = 'OSQ';
    const OSR = 'OSR';
    const OUL = 'OUL';
    const PEX = 'PEX';
    const PGL = 'PGL';
    const PIN = 'PIN';
    const PMU = 'PMU';
    const PPG = 'PPG';
    const PPP = 'PPP';
    const PPR = 'PPR';
    const PPT = 'PPT';
    const PPV = 'PPV';
    const PRR = 'PRR';
    const PTR = 'PTR';
    const QBP = 'QBP';
    const QCK = 'QCK';
    const QCN = 'QCN';
    const QRY = 'QRY';
    const QSB = 'QSB';
    const QSX = 'QSX';
    const QVR = 'QVR';
    const RAR = 'RAR';
    const RAS = 'RAS';
    const RCI = 'RCI';
    const RCL = 'RCL';
    const RDE = 'RDE';
    const RDR = 'RDR';
    const RDS = 'RDS';
    const RDY = 'RDY';
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
    const RSP = 'RSP';
    const RTB = 'RTB';
    const SIU = 'SIU';
    const SPQ = 'SPQ';
    const SQM = 'SQM';
    const SQR = 'SQR';
    const SRM = 'SRM';
    const SRR = 'SRR';
    const SSR = 'SSR';
    const SSU = 'SSU';
    const SUR = 'SUR';
    const TBR = 'TBR';
    const TCR = 'TCR';
    const TCU = 'TCU';
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
            self::BAR => 'Add/change billing account',
            self::CRM => 'Clinical study registration message',
            self::CSU => 'Unsolicited study data message',
            self::DFT => 'Detail financial transactions',
            self::DOC => 'Document response',
            self::DSR => 'Display response',
            self::EAC => 'Automated equipment command message',
            self::EAN => 'Automated equipment notification message',
            self::EAR => 'Automated equipment response message',
            self::EDR => 'Enhanced display response',
            self::EQQ => 'Embedded query language query',
            self::ERP => 'Event replay response',
            self::ESR => 'Automated equipment status update acknowledgement message',
            self::ESU => 'Automated equipment status update message',
            self::INR => 'Automated equipment inventory request message',
            self::INU => 'Automated equipment inventory update message',
            self::LSR => 'Automated equipment log/service request message',
            self::LSU => 'Automated equipment log/service update message',
            self::MCF => 'Delayed Acknowledgement (Retained for backward compatibility only)',
            self::MDM => 'Medical document management',
            self::MFD => 'Master files delayed application acknowledgment',
            self::MFK => 'Master files application acknowledgment',
            self::MFN => 'Master files notification',
            self::MFQ => 'Master files query',
            self::MFR => 'Master files response',
            self::NMD => 'Application management data message',
            self::NMQ => 'Application management query message',
            self::NMR => 'Application management response message',
            self::OMD => 'Dietary order',
            self::OMG => 'General clinical order message',
            self::OML => 'Laboratory order message',
            self::OMN => 'Non-stock requisition order message',
            self::OMP => 'Pharmacy/treatment order message',
            self::OMS => 'Stock requisition order message',
            self::ORD => 'Dietary order - General order acknowledgment message',
            self::ORF => 'Query for results of observation',
            self::ORG => 'General clinical order acknowledgement message',
            self::ORL => 'Laboratory acknowledgement message (unsolicited)',
            self::ORM => 'Pharmacy/treatment order message',
            self::ORN => 'Non-stock requisition - General order acknowledgment message',
            self::ORP => 'Pharmacy/treatment order acknowledgement message',
            self::ORR => 'General order response message response to any ORM',
            self::ORS => 'Stock requisition - General order acknowledgment message',
            self::ORU => 'Unsolicited transmission of an observation message',
            self::OSQ => 'Query response for order status',
            self::OSR => 'Query response for order status',
            self::OUL => 'Unsolicited laboratory observation message',
            self::PEX => 'Product experience message',
            self::PGL => 'Patient goal message',
            self::PIN => 'Patient insurance information',
            self::PMU => 'Add personnel record',
            self::PPG => 'Patient pathway message (goal-oriented)',
            self::PPP => 'Patient pathway message (problem-oriented)',
            self::PPR => 'Patient problem message',
            self::PPT => 'Patient pathway goal-oriented response',
            self::PPV => 'Patient goal response',
            self::PRR => 'Patient problem response',
            self::PTR => 'Patient pathway problem-oriented response',
            self::QBP => 'Query by parameter',
            self::QCK => 'Deferred query',
            self::QCN => 'Cancel query',
            self::QRY => 'Query, original mode',
            self::QSB => 'Create subscription',
            self::QSX => 'Cancel subscription/acknowledge message',
            self::QVR => 'Query for previous events',
            self::RAR => 'Pharmacy/treatment administration information',
            self::RAS => 'Pharmacy/treatment administration message',
            self::RCI => 'Return clinical information',
            self::RCL => 'Return clinical list',
            self::RDE => 'Pharmacy/treatment encoded order message',
            self::RDR => 'Pharmacy/treatment dispense information',
            self::RDS => 'Pharmacy/treatment dispense message',
            self::RDY => 'Display based response',
            self::REF => 'Patient referral',
            self::RER => 'Pharmacy/treatment encoded order information',
            self::RGR => 'Pharmacy/treatment dose information',
            self::RGV => 'Pharmacy/treatment give message',
            self::ROR => 'Pharmacy/treatment order response',
            self::RPA => 'Return patient authorization',
            self::RPI => 'Return patient information',
            self::RPL => 'Return patient display list',
            self::RPR => 'Return patient list',
            self::RQA => 'Request patient authorization',
            self::RQC => 'Request clinical information',
            self::RQI => 'Request patient information',
            self::RQP => 'Request patient demographics',
            self::RQQ => 'Event replay query',
            self::RRA => 'Pharmacy/treatment administration acknowledgement message',
            self::RRD => 'Pharmacy/treatment dispense acknowledgment message',
            self::RRE => 'Pharmacy/treatment encoded order acknowledgment message',
            self::RRG => 'Pharmacy/treatment give acknowledgment message',
            self::RRI => 'Return referral information',
            self::RSP => 'Segment pattern response',
            self::RTB => 'Tabular response',
            self::SIU => 'Schedule information unsolicited',
            self::SPQ => 'Stored procedure request',
            self::SQM => 'Schedule query message',
            self::SQR => 'Schedule query response',
            self::SRM => 'Schedule request message',
            self::SRR => 'Scheduled request response',
            self::SSR => 'Specimen status request message',
            self::SSU => 'Specimen status update message',
            self::SUR => 'Summary product experience report',
            self::TBR => 'Tabular data response',
            self::TCR => 'Automated equipment test code settings request message',
            self::TCU => 'Automated equipment test code settings update message',
            self::UDM => 'Unsolicited display update message',
            self::VQQ => 'Virtual table query',
            self::VXQ => 'Query for vaccination record',
            self::VXR => 'Vaccination record response',
            self::VXU => 'Unsolicited vaccination record update',
            self::VXX => 'Response for vaccination query with multiple PID matches',
            ];
    }
      
}