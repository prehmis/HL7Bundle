<?php
    
namespace Prehmis\HL7Bundle\Tables\v23;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0003
 * Event Type
 * HL7 version 2.3
 *
 */
final class T0003 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A01 = 'A01';
    const A02 = 'A02';
    const A03 = 'A03';
    const A04 = 'A04';
    const A05 = 'A05';
    const A06 = 'A06';
    const A07 = 'A07';
    const A08 = 'A08';
    const A09 = 'A09';
    const A10 = 'A10';
    const A11 = 'A11';
    const A12 = 'A12';
    const A13 = 'A13';
    const A14 = 'A14';
    const A15 = 'A15';
    const A16 = 'A16';
    const A17 = 'A17';
    const A18 = 'A18';
    const A19 = 'A19';
    const A20 = 'A20';
    const A21 = 'A21';
    const A22 = 'A22';
    const A23 = 'A23';
    const A24 = 'A24';
    const A25 = 'A25';
    const A26 = 'A26';
    const A27 = 'A27';
    const A28 = 'A28';
    const A29 = 'A29';
    const A30 = 'A30';
    const A31 = 'A31';
    const A32 = 'A32';
    const A33 = 'A33';
    const A34 = 'A34';
    const A35 = 'A35';
    const A36 = 'A36';
    const A37 = 'A37';
    const A38 = 'A38';
    const A39 = 'A39';
    const A40 = 'A40';
    const A41 = 'A41';
    const A42 = 'A42';
    const A43 = 'A43';
    const A44 = 'A44';
    const A45 = 'A45';
    const A46 = 'A46';
    const A47 = 'A47';
    const A48 = 'A48';
    const A49 = 'A49';
    const A50 = 'A50';
    const A51 = 'A51';
    const C01 = 'C01';
    const C02 = 'C02';
    const C03 = 'C03';
    const C04 = 'C04';
    const C05 = 'C05';
    const C06 = 'C06';
    const C07 = 'C07';
    const C08 = 'C08';
    const C09 = 'C09';
    const C10 = 'C10';
    const C11 = 'C11';
    const C12 = 'C12';
    const CNQ = 'CNQ';
    const I01 = 'I01';
    const I02 = 'I02';
    const I03 = 'I03';
    const I04 = 'I04';
    const I05 = 'I05';
    const I06 = 'I06';
    const I07 = 'I07';
    const I08 = 'I08';
    const I09 = 'I09';
    const I10 = 'I10';
    const I11 = 'I11';
    const I12 = 'I12';
    const I13 = 'I13';
    const I14 = 'I14';
    const I15 = 'I15';
    const M01 = 'M01';
    const M02 = 'M02';
    const M03 = 'M03';
    const M04 = 'M04';
    const M05 = 'M05';
    const M06 = 'M06';
    const M07 = 'M07';
    const M08 = 'M08';
    const M09 = 'M09';
    const M10 = 'M10';
    const M11 = 'M11';
    const O01 = 'O01';
    const O02 = 'O02';
    const O22 = '022';
    const P01 = 'P01';
    const P02 = 'P02';
    const P03 = 'P03';
    const P04 = 'P04';
    const P05 = 'P05';
    const P06 = 'P06';
    const Q01 = 'Q01';
    const Q02 = 'Q02';
    const Q03 = 'Q03';
    const Q04 = 'Q04';
    const Q05 = 'Q05';
    const Q06 = 'Q06';
    const R01 = 'R01';
    const R02 = 'R02';
    const R03 = 'R03';
    const R04 = 'R04';
    const R05 = 'R05';
    const R06 = 'R06';
    const RAR = 'RAR';
    const RER = 'RER';
    const ROR = 'ROR';
    const S01 = 'S01';
    const S02 = 'S02';
    const S03 = 'S03';
    const S04 = 'S04';
    const S05 = 'S05';
    const S06 = 'S06';
    const S07 = 'S07';
    const S08 = 'S08';
    const S09 = 'S09';
    const S10 = 'S10';
    const S11 = 'S11';
    const S12 = 'S12';
    const S13 = 'S13';
    const S14 = 'S14';
    const S15 = 'S15';
    const S16 = 'S16';
    const S17 = 'S17';
    const S18 = 'S18';
    const S19 = 'S19';
    const S20 = 'S20';
    const S21 = 'S21';
    const S22 = 'S22';
    const S23 = 'S23';
    const S24 = 'S24';
    const S25 = 'S25';
    const S26 = 'S26';
    const T01 = 'T01';
    const T02 = 'T02';
    const T03 = 'T03';
    const T04 = 'T04';
    const T05 = 'T05';
    const T06 = 'T06';
    const T07 = 'T07';
    const T09 = 'T09';
    const V01 = 'V01';
    const V02 = 'V02';
    const V03 = 'V03';
    const V04 = 'V04';
    const VARIES = 'VARIES';
    const W01 = 'W01';
    const W02 = 'W02';
            
    public static function choices(): array
    {
        return [
            self::A01 => 'ADT/ACK - Admit/visit notification',
            self::A02 => 'ADT/ACK - Transfer a patient',
            self::A03 => 'ADT/ACK -  Discharge/end visit',
            self::A04 => 'ADT/ACK -  Register a patient',
            self::A05 => 'ADT/ACK -  Pre-admit a patient',
            self::A06 => 'ADT/ACK -  Change an outpatient to an inpatient',
            self::A07 => 'ADT/ACK -  Change an inpatient to an outpatient',
            self::A08 => 'ADT/ACK -  Update patient information',
            self::A09 => 'ADT/ACK -  Patient departing - tracking',
            self::A10 => 'ADT/ACK -  Patient arriving - tracking',
            self::A11 => 'ADT/ACK -  Cancel admit/visit notification',
            self::A12 => 'ADT/ACK -  Cancel transfer',
            self::A13 => 'ADT/ACK -  Cancel discharge/end visit',
            self::A14 => 'ADT/ACK -  Pending admit',
            self::A15 => 'ADT/ACK -  Pending transfer',
            self::A16 => 'ADT/ACK -  Pending discharge',
            self::A17 => 'ADT/ACK -  Swap patients',
            self::A18 => 'ADT/ACK -  Merge patient information (for backward compatibility only)',
            self::A19 => 'QRY/ADR -  Patient query',
            self::A20 => 'ADT/ACK -  Bed status update',
            self::A21 => 'ADT/ACK -  Patient goes on a “leave of absence”',
            self::A22 => 'ADT/ACK -  Patient returns from a “leave of absence”',
            self::A23 => 'ADT/ACK -  Delete a patient record',
            self::A24 => 'ADT/ACK -  Link patient information',
            self::A25 => 'ADT/ACK -  Cancel pending discharge',
            self::A26 => 'ADT/ACK -  Cancel pending transfer',
            self::A27 => 'ADT/ACK -  Cancel pending admit',
            self::A28 => 'ADT/ACK -  Add person information',
            self::A29 => 'ADT/ACK -  Delete person information',
            self::A30 => 'ADT/ACK -  Merge person information (for backward compatibility only)',
            self::A31 => 'ADT/ACK -  Update person information',
            self::A32 => 'ADT/ACK -  Cancel patient arriving - tracking',
            self::A33 => 'ADT/ACK -  Cancel patient departing - tracking',
            self::A34 => 'ADT/ACK -  Merge patient information - patient ID only (for backward compatibility only)',
            self::A35 => 'ADT/ACK -  Merge patient information - account number only (for backward compatibility only)',
            self::A36 => 'ADT/ACK -  Merge patient information - patient ID and account number (for backward compatibility only)',
            self::A37 => 'ADT/ACK -  Unlink patient information',
            self::A38 => 'ADT/ACK - Cancel pre-admit',
            self::A39 => 'ADT/ACK - Merge person - patient ID (for backward compatibility only)',
            self::A40 => 'ADT/ACK - Merge patient - patient identifier list',
            self::A41 => 'ADT/ACK - Merge account - patient account number',
            self::A42 => 'ADT/ACK - Merge visit - visit number',
            self::A43 => 'ADT/ACK - Move patient information - patient identifier list',
            self::A44 => 'ADT/ACK - Move account information - patient account number',
            self::A45 => 'ADT/ACK - Move visit information - visit number',
            self::A46 => 'ADT/ACK - Change patient ID (for backward compatibility only)',
            self::A47 => 'ADT/ACK - Change patient identifier list',
            self::A48 => 'ADT/ACK - Change alternate patient ID (for backward compatibility only)',
            self::A49 => 'ADT/ACK - Change patient account number',
            self::A50 => 'ADT/ACK - Change visit number',
            self::A51 => 'ADT/ACK - Change alternate visit ID',
            self::C01 => 'CRM - Register a patient on a clinical trial',
            self::C02 => 'CRM - Cancel a patient registration on clinical trial (for clerical mistakes only)',
            self::C03 => 'CRM - Correct/update registration information',
            self::C04 => 'CRM - Patient has gone off a clinical trial',
            self::C05 => 'CRM - Patient enters phase of clinical trial',
            self::C06 => 'CRM - Cancel patient entering a phase (clerical mistake)',
            self::C07 => 'CRM - Correct/update phase information',
            self::C08 => 'CRM - Patient has gone off phase of clinical trial',
            self::C09 => 'CSU - Automated time intervals for reporting, like monthly',
            self::C10 => 'CSU - Patient completes the clinical trial',
            self::C11 => 'CSU - Patient completes a phase of the clinical trial',
            self::C12 => 'CSU - Update/correction of patient order/result information',
            self::CNQ => 'QRY/EQQ/VQQ/RQQ - Cancel query',
            self::I01 => 'RQI/RPI - Request for insurance information',
            self::I02 => 'RQI/RPL - Request/receipt of patient selection display list',
            self::I03 => 'RQI/RPR - Request/receipt of patient selection list',
            self::I04 => 'RQD/RPI - Request for patient demographic data',
            self::I05 => 'RQC/RCI - Request for patient clinical information',
            self::I06 => 'RQC/RCL - Request/receipt of clinical data listing',
            self::I07 => 'PIN/ACK - Unsolicited insurance information',
            self::I08 => 'RQA/RPA - Request for treatment authorization information',
            self::I09 => 'RQA/RPA - Request for modification to an authorization',
            self::I10 => 'RQA/RPA - Request for resubmission of an authorization',
            self::I11 => 'RQA/RPA - Request for cancellation of an authorization',
            self::I12 => 'REF/RRI -  Patient referral',
            self::I13 => 'REF/RRI - Modify patient referral',
            self::I14 => 'REF/RRI - Cancel patient referral',
            self::I15 => 'REF/RRI - Request patient referral status',
            self::M01 => 'MFN/MFK - Master file not otherwise specified ( for backward compatibility only )',
            self::M02 => 'MFN/MFK - Master file - staff practitioner',
            self::M03 => 'MFN/MFK - Master file - test/observation ( for backward compatibility only )',
            self::M04 => 'MFN/MFK - Master files charge description',
            self::M05 => 'MFN/MFK - Patient location master file',
            self::M06 => 'MFN/MFK - Clinical study with phases and schedules master file',
            self::M07 => 'MFN/MFK - Clinical study without phases but with schedules master file',
            self::M08 => 'MFN/MFK - Test/observation (numeric) master file',
            self::M09 => 'MFN/MFK - Test/observation (categorical) master file',
            self::M10 => 'MFN/MFK - Test /observation batteries master file',
            self::M11 => 'MFN/MFK - Test/calculated observations master file',
            self::O01 => 'ORM - Order message (also RDE, RDS, RGV, RAS)',
            self::O02 => 'ORR - Order response (also RRE, RRD, RRG, RRA)',
            self::O22 => 'ORL - General laboratory order response message to any OML',
            self::P01 => 'BAR/ACK - Add patient accounts',
            self::P02 => 'BAR/ACK - Purge patient accounts',
            self::P03 => 'DFT/ACK - Post detail financial transaction',
            self::P04 => 'QRY/DSP - Generate bill and A/R statements',
            self::P05 => 'BAR/ACK - Update account',
            self::P06 => 'BAR/ACK - End account',
            self::Q01 => 'QRY/DSR - Query sent for immediate response',
            self::Q02 => 'QRY/QCK - Query sent for deferred response',
            self::Q03 => 'DSR/ACK - Deferred response to a query',
            self::Q04 => 'EQQ - Embedded query language query',
            self::Q05 => 'UDM/ACK - Unsolicited display update message',
            self::Q06 => 'OSQ/OSR - Query for order status',
            self::R01 => 'ORU/ACK - Unsolicited transmission of an observation message',
            self::R02 => 'QRY - Query for results of observation',
            self::R03 => 'QRY/DSR Display-oriented results, query/unsol. update (for backward compatibility only) (Replaced by Q05)',
            self::R04 => 'ORF - Response to query; transmission of requested observation',
            self::R05 => 'QRY/DSR - query for display results',
            self::R06 => 'UDM - unsolicited update/display results',
            self::RAR => 'RAR - Pharmacy administration information query response',
            self::RER => 'RER-Pharmacy encoded order information query response',
            self::ROR => 'ROR - Pharmacy prescription order query response',
            self::S01 => 'SRM/SRR - Request new appointment booking',
            self::S02 => 'SRM/SRR - Request appointment rescheduling',
            self::S03 => 'SRM/SRR - Request appointment modification',
            self::S04 => 'SRM/SRR - Request appointment cancellation',
            self::S05 => 'SRM/SRR - Request appointment discontinuation',
            self::S06 => 'SRM/SRR - Request appointment deletion',
            self::S07 => 'SRM/SRR - Request addition of service/resource on appointment',
            self::S08 => 'SRM/SRR - Request modification of service/resource on appointment',
            self::S09 => 'SRM/SRR - Request cancellation of service/resource on appointment',
            self::S10 => 'SRM/SRR - Request discontinuation of service/resource on appointment',
            self::S11 => 'SRM/SRR - Request deletion of service/resource on appointment',
            self::S12 => 'SIU/ACK - Notification of new appointment booking',
            self::S13 => 'SIU/ACK - Notification of appointment rescheduling',
            self::S14 => 'SIU/ACK - Notification of appointment modification',
            self::S15 => 'SIU/ACK - Notification of appointment cancellation',
            self::S16 => 'SIU/ACK - Notification of appointment discontinuation',
            self::S17 => 'SIU/ACK - Notification of appointment deletion',
            self::S18 => 'SIU/ACK - Notification of addition of service/resource on appointment',
            self::S19 => 'SIU/ACK - Notification of modification of service/resource on appointment',
            self::S20 => 'SIU/ACK - Notification of cancellation of service/resource on appointment',
            self::S21 => 'SIU/ACK - Notification of discontinuation of service/resource on appointment',
            self::S22 => 'SIU/ACK - Notification of deletion of service/resource on appointment',
            self::S23 => 'SIU/ACK - Notification of blocked schedule time slot(s)',
            self::S24 => 'SIU/ACK - Notification of opened (“unblocked”) schedule time slot(s)',
            self::S25 => 'SQM/SQR - Schedule query message and response',
            self::S26 => 'SIU/ACK Notification that patient did not show up for schedule appointment',
            self::T01 => 'MDM/ACK - Original document notification',
            self::T02 => 'MDM/ACK - Original document notification and content',
            self::T03 => 'MDM/ACK - Document status change notification',
            self::T04 => 'MDM/ACK - Document status change notification and content',
            self::T05 => 'MDM/ACK - Document addendum notification',
            self::T06 => 'MDM/ACK - Document addendum notification and content',
            self::T07 => 'MDM/ACK - Document edit notification',
            self::T09 => 'MDM/ACK - Document cancel notification',
            self::V01 => 'VXQ - Query for vaccination record',
            self::V02 => 'VXX - Response to vaccination query returning multiple PID matches',
            self::V03 => 'VXR - Vaccination record response',
            self::V04 => 'VXU - Unsolicited vaccination record update',
            self::VARIES => 'MFQ/MFR - Master files query (use event same as asking for e.g., M05 - location)',
            self::W01 => 'ORU - Waveform result, unsolicited transmission of requested information',
            self::W02 => 'QRF - Waveform result, response to query',
            ];
    }
      
}