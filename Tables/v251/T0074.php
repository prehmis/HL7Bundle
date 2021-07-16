<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0074
 * Diagnostic Service Section ID
 * HL7 version 2.5.1
 *
 */
final class T0074 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AU = 'AU';
    const BG = 'BG';
    const BLB = 'BLB';
    const CH = 'CH';
    const CP = 'CP';
    const CT = 'CT';
    const CTH = 'CTH';
    const CUS = 'CUS';
    const EC = 'EC';
    const EN = 'EN';
    const HM = 'HM';
    const ICU = 'ICU';
    const IMM = 'IMM';
    const LAB = 'LAB';
    const MB = 'MB';
    const MCB = 'MCB';
    const MYC = 'MYC';
    const NMR = 'NMR';
    const NMS = 'NMS';
    const NRS = 'NRS';
    const OSL = 'OSL';
    const OT = 'OT';
    const OTH = 'OTH';
    const OUS = 'OUS';
    const PF = 'PF';
    const PHR = 'PHR';
    const PHY = 'PHY';
    const PT = 'PT';
    const RAD = 'RAD';
    const RC = 'RC';
    const RT = 'RT';
    const RUS = 'RUS';
    const RX = 'RX';
    const SP = 'SP';
    const SR = 'SR';
    const TX = 'TX';
    const VR = 'VR';
    const VUS = 'VUS';
    const XRC = 'XRC';
            
    public static function choices(): array
    {
        return [
            self::AU => 'Audiology',
            self::BG => 'Blood Gases',
            self::BLB => 'Blood Bank',
            self::CH => 'Chemistry',
            self::CP => 'Cytopathology',
            self::CT => 'CAT Scan',
            self::CTH => 'Cardiac Catheterization',
            self::CUS => 'Cardiac Ultrasound',
            self::EC => 'Electrocardiac (e.g., EKG,  EEC, Holter)',
            self::EN => 'Electroneuro (EEG, EMG,EP,PSG)',
            self::HM => 'Hematology',
            self::ICU => 'Bedside ICU Monitoring',
            self::IMM => 'Immunology',
            self::LAB => 'Laboratory',
            self::MB => 'Microbiology',
            self::MCB => 'Mycobacteriology',
            self::MYC => 'Mycology',
            self::NMR => 'Nuclear Magnetic Resonance',
            self::NMS => 'Nuclear Medicine Scan',
            self::NRS => 'Nursing Service Measures',
            self::OSL => 'Outside Lab',
            self::OT => 'Occupational Therapy',
            self::OTH => 'Other',
            self::OUS => 'OB Ultrasound',
            self::PF => 'Pulmonary Function',
            self::PHR => 'Pharmacy',
            self::PHY => 'Physician (Hx. Dx, admission note, etc.)',
            self::PT => 'Physical Therapy',
            self::RAD => 'Radiology',
            self::RC => 'Respiratory Care (therapy)',
            self::RT => 'Radiation Therapy',
            self::RUS => 'Radiology Ultrasound',
            self::RX => 'Radiograph',
            self::SP => 'Surgical Pathology',
            self::SR => 'Serology',
            self::TX => 'Toxicology',
            self::VR => 'Virology',
            self::VUS => 'Vascular Ultrasound',
            self::XRC => 'Cineradiograph',
            ];
    }
      
}