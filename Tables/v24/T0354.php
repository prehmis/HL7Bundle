<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0354
 * Message Structure
 * HL7 version 2.4
 *
 */
final class T0354 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ACK = 'ACK';
    const ADR_A19 = 'ADR_A19';
    const ADT_A01 = 'ADT_A01';
    const ADT_A02 = 'ADT_A02';
    const ADT_A03 = 'ADT_A03';
    const ADT_A05 = 'ADT_A05';
    const ADT_A06 = 'ADT_A06';
    const ADT_A09 = 'ADT_A09';
    const ADT_A15 = 'ADT_A15';
    const ADT_A16 = 'ADT_A16';
    const ADT_A17 = 'ADT_A17';
    const ADT_A18 = 'ADT_A18';
    const ADT_A20 = 'ADT_A20';
    const ADT_A21 = 'ADT_A21';
    const ADT_A24 = 'ADT_A24';
    const ADT_A30 = 'ADT_A30';
    const ADT_A37 = 'ADT_A37';
    const ADT_A38 = 'ADT_A38';
    const ADT_A39 = 'ADT_A39';
    const ADT_A43 = 'ADT_A43';
    const ADT_A45 = 'ADT_A45';
    const ADT_A50 = 'ADT_A50';
    const ADT_A52 = 'ADT_A52';
    const ADT_A54 = 'ADT_A54';
    const ADT_A60 = 'ADT_A60';
    const ADT_A61 = 'ADT_A61';
    const BAR_P01 = 'BAR_P01';
    const BAR_P02 = 'BAR_P02';
    const BAR_P05 = 'BAR_P05';
    const BAR_P06 = 'BAR_P06';
    const BAR_P10 = 'BAR_P10';
    const CRM_C01 = 'CRM_C01';
    const CSU_C09 = 'CSU_C09';
    const DFT_P03 = 'DFT_P03';
    const DOC_T12 = 'DOC_T12';
    const DSR_P04 = 'DSR_P04';
    const DSR_Q01 = 'DSR_Q01';
    const DSR_Q03 = 'DSR_Q03';
    const EAC_U07 = 'EAC_U07';
    const EAN_U09 = 'EAN_U09';
    const EAR_U08 = 'EAR_U08';
    const EDR_R07 = 'EDR_R07';
    const EQQ_Q04 = 'EQQ_Q04';
    const ERP_R09 = 'ERP_R09';
    const ESR_U02 = 'ESR_U02';
    const ESU_U01 = 'ESU_U01';
    const INR_U06 = 'INR_U06';
    const INU_U05 = 'INU_U05';
    const LSU_U12 = 'LSU_U12';
    const MDM_T01 = 'MDM_T01';
    const MDM_T02 = 'MDM_T02';
    const MFD_MFA = 'MFD_MFA';
    const MFK_M01 = 'MFK_M01';
    const MFN_M01 = 'MFN_M01';
    const MFN_M02 = 'MFN_M02';
    const MFN_M03 = 'MFN_M03';
    const MFN_M04 = 'MFN_M04';
    const MFN_M05 = 'MFN_M05';
    const MFN_M06 = 'MFN_M06';
    const MFN_M07 = 'MFN_M07';
    const MFN_M08 = 'MFN_M08';
    const MFN_M09 = 'MFN_M09';
    const MFN_M10 = 'MFN_M10';
    const MFN_M11 = 'MFN_M11';
    const MFN_M12 = 'MFN_M12';
    const MFQ_M01 = 'MFQ_M01';
    const MFR_M01 = 'MFR_M01';
    const NMD_N02 = 'NMD_N02';
    const NMQ_N01 = 'NMQ_N01';
    const NMR_N01 = 'NMR_N01';
    const OMD_O03 = 'OMD_O03';
    const OMG_O19 = 'OMG_O19';
    const OML_O21 = 'OML_O21';
    const OMN_O07 = 'OMN_O07';
    const OMP_O09 = 'OMP_O09';
    const OMS_O05 = 'OMS_O05';
    const ORD_O04 = 'ORD_O04';
    const ORF_R04 = 'ORF_R04';
    const ORG_O20 = 'ORG_O20';
    const ORL_O22 = 'ORL_O22';
    const ORM_O01 = 'ORM_O01';
    const ORN_008 = 'ORN_008';
    const ORP_O10 = 'ORP_O10';
    const ORR_O02 = 'ORR_O02';
    const ORS_O06 = 'ORS_O06';
    const ORU_R01 = 'ORU_R01';
    const ORU_W01 = 'ORU_W01';
    const OSQ_Q06 = 'OSQ_Q06';
    const OSR_Q06 = 'OSR_Q06';
    const OUL_R21 = 'OUL_R21';
    const PEX_P07 = 'PEX_P07';
    const PGL_PC6 = 'PGL_PC6';
    const PMU_B01 = 'PMU_B01';
    const PMU_B03 = 'PMU_B03';
    const PMU_B04 = 'PMU_B04';
    const PPG_PCG = 'PPG_PCG';
    const PPP_PCB = 'PPP_PCB';
    const PPR_PC1 = 'PPR_PC1';
    const PPT_PCL = 'PPT_PCL';
    const PPV_PCA = 'PPV_PCA';
    const PRR_PC5 = 'PRR_PC5';
    const PTR_PCF = 'PTR_PCF';
    const QBP_Q11 = 'QBP_Q11';
    const QBP_Q13 = 'QBP_Q13';
    const QBP_Q15 = 'QBP_Q15';
    const QBP_Q21 = 'QBP_Q21';
    const QCK_Q02 = 'QCK_Q02';
    const QCN_J01 = 'QCN_J01';
    const QRF_W02 = 'QRF_W02';
    const QRY_A19 = 'QRY_A19';
    const QRY_P04 = 'QRY_P04';
    const QRY_PC4 = 'QRY_PC4';
    const QRY_Q01 = 'QRY_Q01';
    const QRY_Q02 = 'QRY_Q02';
    const QRY_Q26 = 'QRY_Q26';
    const QRY_Q27 = 'QRY_Q27';
    const QRY_Q28 = 'QRY_Q28';
    const QRY_Q29 = 'QRY_Q29';
    const QRY_Q30 = 'QRY_Q30';
    const QRY_R02 = 'QRY_R02';
    const QRY_T12 = 'QRY_T12';
    const QSB_Q16 = 'QSB_Q16';
    const QVR_Q17 = 'QVR_Q17';
    const RAS_O17 = 'RAS_O17';
    const RCI_I05 = 'RCI_I05';
    const RCL_I06 = 'RCL_I06';
    const RDE_O11 = 'RDE_O11';
    const RDR_RDR = 'RDR_RDR';
    const RDS_O13 = 'RDS_O13';
    const RDY_K15 = 'RDY_K15';
    const REF_I12 = 'REF_I12';
    const RER_RER = 'RER_RER';
    const RGR_RGR = 'RGR_RGR';
    const RGV_O15 = 'RGV_O15';
    const ROR_ROR = 'ROR_ROR';
    const RPA_I08 = 'RPA_I08';
    const RPI_I0I = 'RPI_I0I';
    const RPL_I02 = 'RPL_I02';
    const RPR_I03 = 'RPR_I03';
    const RQA_I08 = 'RQA_I08';
    const RQC_I05 = 'RQC_I05';
    const RQI_I0I = 'RQI_I0I';
    const RQP_I04 = 'RQP_I04';
    const RQQ_Q09 = 'RQQ_Q09';
    const RRA_O02 = 'RRA_O02';
    const RRA_O18 = 'RRA_O18';
    const RRD_O14 = 'RRD_O14';
    const RRE_O12 = 'RRE_O12';
    const RRG_O16 = 'RRG_O16';
    const RRI_I12 = 'RRI_I12';
    const RSP_K11 = 'RSP_K11';
    const RSP_K21 = 'RSP_K21';
    const RSP_K22 = 'RSP_K22';
    const RSP_K23 = 'RSP_K23';
    const RTB_K13 = 'RTB_K13';
    const SPQ_Q08 = 'SPQ_Q08';
    const SQM_S25 = 'SQM_S25';
    const SQR_S25 = 'SQR_S25';
    const SRM_S01 = 'SRM_S01';
    const SRR_S01 = 'SRR_S01';
    const SSR_U04 = 'SSR_U04';
    const SSU_U03 = 'SSU_U03';
    const SUR_P09 = 'SUR_P09';
    const TBR_R08 = 'TBR_R08';
    const TBR_R09 = 'TBR_R09';
    const TCU_U10 = 'TCU_U10';
    const UDM_Q05 = 'UDM_Q05';
    const VQQ_Q07 = 'VQQ_Q07';
    const VXQ_V01 = 'VXQ_V01';
    const VXR_V03 = 'VXR_V03';
    const VXU_V04 = 'VXU_V04';
    const VXX_V02 = 'VXX_V02';
            
    public static function choices(): array
    {
        return [
            self::ACK => 'Varies',
            self::ADR_A19 => 'A19',
            self::ADT_A01 => 'A01, A04, A08, A13',
            self::ADT_A02 => 'A02',
            self::ADT_A03 => 'A03',
            self::ADT_A05 => 'A05, A14, A28, A31',
            self::ADT_A06 => 'A06, A07',
            self::ADT_A09 => 'A09, A10, A11, A12',
            self::ADT_A15 => 'A15',
            self::ADT_A16 => 'A16',
            self::ADT_A17 => 'A17',
            self::ADT_A18 => 'A18',
            self::ADT_A20 => 'A20',
            self::ADT_A21 => 'A21, A22, A23, A25, A26, A27, A29, A32, A33',
            self::ADT_A24 => 'A24',
            self::ADT_A30 => 'A30, A34, A35, A36, A46, A47, A48, A49',
            self::ADT_A37 => 'A37',
            self::ADT_A38 => 'A38',
            self::ADT_A39 => 'A39, A40, A41, A42',
            self::ADT_A43 => 'A43, A44',
            self::ADT_A45 => 'A45',
            self::ADT_A50 => 'A50, A51',
            self::ADT_A52 => 'A52, A53, A55',
            self::ADT_A54 => 'A54',
            self::ADT_A60 => 'A60',
            self::ADT_A61 => 'A61, A62',
            self::BAR_P01 => 'P01',
            self::BAR_P02 => 'P02',
            self::BAR_P05 => 'P05',
            self::BAR_P06 => 'P06',
            self::BAR_P10 => 'P10',
            self::CRM_C01 => 'C01, C02, C03, C04, C05, C06, C07, C08',
            self::CSU_C09 => 'C09, C10, C11, C12',
            self::DFT_P03 => 'P03',
            self::DOC_T12 => 'T12',
            self::DSR_P04 => 'P04',
            self::DSR_Q01 => 'Q01',
            self::DSR_Q03 => 'Q03',
            self::EAC_U07 => 'U07',
            self::EAN_U09 => 'U09',
            self::EAR_U08 => 'U08',
            self::EDR_R07 => 'R07',
            self::EQQ_Q04 => 'Q04',
            self::ERP_R09 => 'R09',
            self::ESR_U02 => 'U02',
            self::ESU_U01 => 'U01',
            self::INR_U06 => 'U06',
            self::INU_U05 => 'U05',
            self::LSU_U12 => 'U12, U13',
            self::MDM_T01 => 'T01, T03, T05, T07, T09, T11',
            self::MDM_T02 => 'T02, T04, T06, T08, T10',
            self::MFD_MFA => 'MFA',
            self::MFK_M01 => 'M01, M02, M03, M04, M05, M06, M07, M08, M09, M10, M11',
            self::MFN_M01 => 'M01',
            self::MFN_M02 => 'M02',
            self::MFN_M03 => 'M03',
            self::MFN_M04 => 'M04',
            self::MFN_M05 => 'M05',
            self::MFN_M06 => 'M06',
            self::MFN_M07 => 'M07',
            self::MFN_M08 => 'M08',
            self::MFN_M09 => 'M09',
            self::MFN_M10 => 'M10',
            self::MFN_M11 => 'M11',
            self::MFN_M12 => 'M12',
            self::MFQ_M01 => 'M01, M02, M03, M04, M05, M06',
            self::MFR_M01 => 'M01, M02, M03, M04, M05, M06',
            self::NMD_N02 => 'N02',
            self::NMQ_N01 => 'N01',
            self::NMR_N01 => 'N01',
            self::OMD_O03 => 'O03',
            self::OMG_O19 => 'O19',
            self::OML_O21 => 'O21',
            self::OMN_O07 => '007',
            self::OMP_O09 => 'O09',
            self::OMS_O05 => 'O05',
            self::ORD_O04 => 'O04',
            self::ORF_R04 => 'R04',
            self::ORG_O20 => 'O20',
            self::ORL_O22 => '022',
            self::ORM_O01 => 'O01',
            self::ORN_008 => 'O08',
            self::ORP_O10 => 'O10',
            self::ORR_O02 => 'O02',
            self::ORS_O06 => 'O06',
            self::ORU_R01 => 'R01',
            self::ORU_W01 => 'W01',
            self::OSQ_Q06 => 'Q06',
            self::OSR_Q06 => 'Q06',
            self::OUL_R21 => 'R21',
            self::PEX_P07 => 'P07, P08',
            self::PGL_PC6 => 'PC6, PC7, PC8',
            self::PMU_B01 => 'B01, B02',
            self::PMU_B03 => 'B03',
            self::PMU_B04 => 'B04, B05',
            self::PPG_PCG => 'PCC, PCG, PCH, PCJ',
            self::PPP_PCB => 'PCB, PCD',
            self::PPR_PC1 => 'PC1, PC2, PC3',
            self::PPT_PCL => 'PCL',
            self::PPV_PCA => 'PCA',
            self::PRR_PC5 => 'PC5',
            self::PTR_PCF => 'PCF',
            self::QBP_Q11 => 'Q11',
            self::QBP_Q13 => 'Q13',
            self::QBP_Q15 => 'Q15',
            self::QBP_Q21 => 'Q21, Q22, Q23,Q24, Q25',
            self::QCK_Q02 => 'Q02',
            self::QCN_J01 => 'J01, J02',
            self::QRF_W02 => 'W02',
            self::QRY_A19 => 'A19',
            self::QRY_P04 => 'P04',
            self::QRY_PC4 => 'PC4, PC9, PCE, PCK',
            self::QRY_Q01 => 'Q01',
            self::QRY_Q02 => 'Q02',
            self::QRY_Q26 => 'Q26',
            self::QRY_Q27 => 'Q27',
            self::QRY_Q28 => 'Q28',
            self::QRY_Q29 => 'Q29',
            self::QRY_Q30 => 'Q30',
            self::QRY_R02 => 'R02',
            self::QRY_T12 => 'T12',
            self::QSB_Q16 => 'Q16',
            self::QVR_Q17 => 'Q17',
            self::RAS_O17 => 'O17',
            self::RCI_I05 => 'I05',
            self::RCL_I06 => 'I06',
            self::RDE_O11 => 'O11',
            self::RDR_RDR => 'RDR',
            self::RDS_O13 => 'O13',
            self::RDY_K15 => 'K15',
            self::REF_I12 => 'I12, I13, I14, I15',
            self::RER_RER => 'RER',
            self::RGR_RGR => 'RGR',
            self::RGV_O15 => 'O15',
            self::ROR_ROR => 'ROR',
            self::RPA_I08 => 'I08, I09. I10, 1II',
            self::RPI_I0I => 'I01, I04',
            self::RPL_I02 => 'I02',
            self::RPR_I03 => 'I03',
            self::RQA_I08 => 'I08, I09, I10, I11',
            self::RQC_I05 => 'I05, I06',
            self::RQI_I0I => 'I01, I02, I03, I07',
            self::RQP_I04 => 'I04',
            self::RQQ_Q09 => 'Q09',
            self::RRA_O02 => 'O02',
            self::RRA_O18 => 'O18',
            self::RRD_O14 => 'O14',
            self::RRE_O12 => 'O12',
            self::RRG_O16 => 'O16',
            self::RRI_I12 => 'I12, I13, I14, I15',
            self::RSP_K11 => 'K11',
            self::RSP_K21 => 'K21',
            self::RSP_K22 => 'K22',
            self::RSP_K23 => 'K23, K24',
            self::RTB_K13 => 'K13',
            self::SPQ_Q08 => 'Q08',
            self::SQM_S25 => 'S25',
            self::SQR_S25 => 'S25',
            self::SRM_S01 => 'S01, S02, S03, S04, S05, S06, S07, S08, S09, S10, S11',
            self::SRR_S01 => 'S01, S02, S03, S04, S05, S06, S07, S08, S09, S10, S11',
            self::SSR_U04 => 'U04',
            self::SSU_U03 => 'U03',
            self::SUR_P09 => 'P09',
            self::TBR_R08 => 'R08',
            self::TBR_R09 => 'R09',
            self::TCU_U10 => 'U10, U11',
            self::UDM_Q05 => 'Q05',
            self::VQQ_Q07 => 'Q07',
            self::VXQ_V01 => 'V01',
            self::VXR_V03 => 'V03',
            self::VXU_V04 => 'V04',
            self::VXX_V02 => 'V02',
            ];
    }
      
}