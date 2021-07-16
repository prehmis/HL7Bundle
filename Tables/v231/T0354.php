<?php
    
namespace Prehmis\HL7Bundle\Tables\v231;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0354
 * Message Structure
 * HL7 version 2.3.1
 *
 */
final class T0354 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ADT_A01 = 'ADT_A01';
    const ADT_A02 = 'ADT_A02';
    const ADT_A03 = 'ADT_A03';
    const ADT_A06 = 'ADT_A06';
    const ADT_A09 = 'ADT_A09';
    const ADT_A12 = 'ADT_A12';
    const ADT_A16 = 'ADT_A16';
    const ADT_A17 = 'ADT_A17';
    const ADT_A18 = 'ADT_A18';
    const ADT_A20 = 'ADT_A20';
    const ADT_A24 = 'ADT_A24';
    const ADT_A28 = 'ADT_A28';
    const ADT_A30 = 'ADT_A30';
    const ADT_A37 = 'ADT_A37';
    const ADT_A38 = 'ADT_A38';
    const ADT_A39 = 'ADT_A39';
    const ADT_A43 = 'ADT_A43';
    const ADT_A45 = 'ADT_A45';
    const ADT_A50 = 'ADT_A50';
    const ARD_A19 = 'ARD_A19';
    const BAR_P01 = 'BAR_P01';
    const BAR_P02 = 'BAR_P02';
    const BAR_P06 = 'BAR_P06';
    const CRM_C01 = 'CRM_C01';
    const CSU_C09 = 'CSU_C09';
    const DFT_P03 = 'DFT_P03';
    const DOC_T12 = 'DOC_T12';
    const DSR_Q01 = 'DSR_Q01';
    const DSR_Q03 = 'DSR_Q03';
    const EDR_R07 = 'EDR_R07';
    const EQQ_Q04 = 'EQQ_Q04';
    const ERP_R09 = 'ERP_R09';
    const MDM_T01 = 'MDM_T01';
    const MDM_T02 = 'MDM_T02';
    const MFD_P09 = 'MFD_P09';
    const MFK_M01 = 'MFK_M01';
    const MFN_M01 = 'MFN_M01';
    const MFN_M02 = 'MFN_M02';
    const MFN_M03 = 'MFN_M03';
    const MFN_M05 = 'MFN_M05';
    const MFN_M06 = 'MFN_M06';
    const MFN_M07 = 'MFN_M07';
    const MFN_M08 = 'MFN_M08';
    const MFN_M09 = 'MFN_M09';
    const MFN_M10 = 'MFN_M10';
    const MFN_M11 = 'MFN_M11';
    const ORF_R02 = 'ORF_R02';
    const ORM__O01 = 'ORM__O01';
    const ORM_Q06 = 'ORM_Q06';
    const ORR_O02 = 'ORR_O02';
    const ORR_Q06 = 'ORR_Q06';
    const ORU_R01 = 'ORU_R01';
    const ORU_W01 = 'ORU_W01';
    const OSQ_Q06 = 'OSQ_Q06';
    const OSR_Q06 = 'OSR_Q06';
    const PEX_P07 = 'PEX_P07';
    const PGL_PC6 = 'PGL_PC6';
    const PIN_107 = 'PIN_107';
    const PPG_PCG = 'PPG_PCG';
    const PPP_PCB = 'PPP_PCB';
    const PPR_PC1 = 'PPR_PC1';
    const PPT_PCL = 'PPT_PCL';
    const PPV_PCA = 'PPV_PCA';
    const PRR_PC5 = 'PRR_PC5';
    const PTR_PCF = 'PTR_PCF';
    const QCK_Q02 = 'QCK_Q02';
    const QRY_A19 = 'QRY_A19';
    const QRY_PC4 = 'QRY_PC4';
    const QRY_Q01 = 'QRY_Q01';
    const QRY_Q02 = 'QRY_Q02';
    const QRY_R02 = 'QRY_R02';
    const QRY_T12 = 'QRY_T12';
    const RAR_RAR = 'RAR_RAR';
    const RAS_O01 = 'RAS_O01';
    const RAS_O02 = 'RAS_O02';
    const RCI_I05 = 'RCI_I05';
    const RCL_I06 = 'RCL_I06';
    const RDE_O01 = 'RDE_O01';
    const RDR_RDR = 'RDR_RDR';
    const RDS_O01 = 'RDS_O01';
    const REF_I12 = 'REF_I12';
    const RER_RER = 'RER_RER';
    const RGR_RGR = 'RGR_RGR';
    const RGV_O01 = 'RGV_O01';
    const RPA_I08 = 'RPA_I08';
    const RPI_I0I = 'RPI_I0I';
    const RPL_I02 = 'RPL_I02';
    const RPR_I03 = 'RPR_I03';
    const RQA_I08 = 'RQA_I08';
    const RQC_I05 = 'RQC_I05';
    const RQC_I06 = 'RQC_I06';
    const RQI_I0I = 'RQI_I0I';
    const RQP_I04 = 'RQP_I04';
    const RQQ_Q09 = 'RQQ_Q09';
    const RRA_O02 = 'RRA_O02';
    const RRD_O02 = 'RRD_O02';
    const RRE_O01 = 'RRE_O01';
    const RRG_O02 = 'RRG_O02';
    const RRI_I12 = 'RRI_I12';
    const RROR_ROR = 'RROR_ROR';
    const SIIU_S12 = 'SIIU_S12';
    const SPQ_Q08 = 'SPQ_Q08';
    const SQM_S25 = 'SQM_S25';
    const SQR_S25 = 'SQR_S25';
    const SRM_S01 = 'SRM_S01';
    const SRM_T12 = 'SRM_T12';
    const SRR_S01 = 'SRR_S01';
    const SRR_T12 = 'SRR_T12';
    const SUR_P09 = 'SUR_P09';
    const TBR_R09 = 'TBR_R09';
    const UDM_Q05 = 'UDM_Q05';
    const VQQ_Q07 = 'VQQ_Q07';
    const VXQ_V01 = 'VXQ_V01';
    const VXR_V03 = 'VXR_V03';
    const VXU_V04 = 'VXU_V04';
    const VXX_V02 = 'VXX_V02';
            
    public static function choices(): array
    {
        return [
            self::ADT_A01 => 'A01, A04, A05, A08, A13, A14, A28, A31',
            self::ADT_A02 => 'A02, A21, A22, A23, A25, A26, A27, A29, A32, A33',
            self::ADT_A03 => 'A03',
            self::ADT_A06 => 'A06, A07',
            self::ADT_A09 => 'A09, A10, A11, A15',
            self::ADT_A12 => 'A12',
            self::ADT_A16 => 'A16',
            self::ADT_A17 => 'A17',
            self::ADT_A18 => 'A18',
            self::ADT_A20 => 'A20',
            self::ADT_A24 => 'A24',
            self::ADT_A28 => 'A28, A31',
            self::ADT_A30 => 'A30, A34, A35, 136, A46, A47, A48, A49',
            self::ADT_A37 => 'A37',
            self::ADT_A38 => 'A38',
            self::ADT_A39 => 'A39, A40, A41, A42',
            self::ADT_A43 => 'A43, A44',
            self::ADT_A45 => 'A45',
            self::ADT_A50 => 'A50, A51',
            self::ARD_A19 => 'A19',
            self::BAR_P01 => 'P01, P05',
            self::BAR_P02 => 'P02',
            self::BAR_P06 => 'P06',
            self::CRM_C01 => 'C01, C02, C03, C04, C05, C06, C07, C08',
            self::CSU_C09 => 'C09, C10, C11, C12',
            self::DFT_P03 => 'P03',
            self::DOC_T12 => 'T12',
            self::DSR_Q01 => 'Q01',
            self::DSR_Q03 => 'Q03',
            self::EDR_R07 => 'R07',
            self::EQQ_Q04 => 'Q04',
            self::ERP_R09 => 'R09',
            self::MDM_T01 => 'T01, T03, T05, T07, T09, T11',
            self::MDM_T02 => 'T02, T04, T06, T08, T10',
            self::MFD_P09 => 'P09',
            self::MFK_M01 => 'M01, M03, M05, M06, M07, M08, M09, M10, M11',
            self::MFN_M01 => 'M01',
            self::MFN_M02 => 'M02',
            self::MFN_M03 => 'M03',
            self::MFN_M05 => 'M05',
            self::MFN_M06 => 'M06',
            self::MFN_M07 => 'M07',
            self::MFN_M08 => 'M08',
            self::MFN_M09 => 'M09',
            self::MFN_M10 => 'M10',
            self::MFN_M11 => 'M11',
            self::ORF_R02 => 'R02, R04',
            self::ORM__O01 => 'O01',
            self::ORM_Q06 => 'Q06',
            self::ORR_O02 => 'O02',
            self::ORR_Q06 => 'Q06',
            self::ORU_R01 => 'R01',
            self::ORU_W01 => 'W01',
            self::OSQ_Q06 => 'Q06',
            self::OSR_Q06 => 'Q06',
            self::PEX_P07 => 'P07, P08',
            self::PGL_PC6 => 'PC6, PC7, PC8',
            self::PIN_107 => 'I07',
            self::PPG_PCG => 'PCC, PCH, PCJ',
            self::PPP_PCB => 'PCB, PCD',
            self::PPR_PC1 => 'PC1, PC2, PC3',
            self::PPT_PCL => 'PCL',
            self::PPV_PCA => 'PCA',
            self::PRR_PC5 => 'PC5',
            self::PTR_PCF => 'PCF',
            self::QCK_Q02 => 'Q02',
            self::QRY_A19 => 'A19',
            self::QRY_PC4 => 'PC4, PC9, PCE, PCK',
            self::QRY_Q01 => 'Q01',
            self::QRY_Q02 => 'Q02',
            self::QRY_R02 => 'R02, R04',
            self::QRY_T12 => 'T12',
            self::RAR_RAR => 'RAR',
            self::RAS_O01 => 'O01',
            self::RAS_O02 => 'O022',
            self::RCI_I05 => 'I05',
            self::RCL_I06 => 'I06',
            self::RDE_O01 => 'O01',
            self::RDR_RDR => 'RDR',
            self::RDS_O01 => 'O01',
            self::REF_I12 => 'I12, I13, I14, I15',
            self::RER_RER => 'RER',
            self::RGR_RGR => 'RGR',
            self::RGV_O01 => 'O01',
            self::RPA_I08 => 'I08, I09. I10, 1II',
            self::RPI_I0I => 'I01, I04',
            self::RPL_I02 => 'I02',
            self::RPR_I03 => 'I03',
            self::RQA_I08 => 'I08, I09, I10, I11',
            self::RQC_I05 => 'I05',
            self::RQC_I06 => 'I06',
            self::RQI_I0I => 'I01, I02, I03',
            self::RQP_I04 => 'I04',
            self::RQQ_Q09 => 'Q09',
            self::RRA_O02 => 'O02',
            self::RRD_O02 => 'O02',
            self::RRE_O01 => 'O01',
            self::RRG_O02 => 'O02',
            self::RRI_I12 => 'I12, I13, I14, I15',
            self::RROR_ROR => 'ROR',
            self::SIIU_S12 => 'S12, S13, S14, S15, S16, S17, S18, S19, S20, S21, S22, S23, S24, S26',
            self::SPQ_Q08 => 'Q08',
            self::SQM_S25 => 'S25',
            self::SQR_S25 => 'S25',
            self::SRM_S01 => 'S01, S02, S03, S04, S05, S06, S07, S08, S09, S10, S11',
            self::SRM_T12 => 'T12',
            self::SRR_S01 => 'S01, S02, S03, S04, S05, S06, S07, S08, S09, S10, S11',
            self::SRR_T12 => 'T12',
            self::SUR_P09 => 'P09',
            self::TBR_R09 => 'R09',
            self::UDM_Q05 => 'Q05',
            self::VQQ_Q07 => 'Q07',
            self::VXQ_V01 => 'V01',
            self::VXR_V03 => 'V03',
            self::VXU_V04 => 'V04',
            self::VXX_V02 => 'V02',
            ];
    }
      
}