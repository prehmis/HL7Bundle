<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0074
 * Diagnostic Service Section ID
 * HL7 version 2.1
 *
 */
final class T0074 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const BG = 'BG';
    const CH = 'CH';
    const CP = 'CP';
    const CT = 'CT';
    const CUS = 'CUS';
    const EC = 'EC';
    const HM = 'HM';
    const IMM = 'IMM';
    const MB = 'MB';
    const MCB = 'MCB';
    const MYC = 'MYC';
    const NMR = 'NMR';
    const NMS = 'NMS';
    const NRS = 'NRS';
    const OT = 'OT';
    const OTH = 'OTH';
    const OUS = 'OUS';
    const PHR = 'PHR';
    const PT = 'PT';
    const RC = 'RC';
    const RT = 'RT';
    const RUS = 'RUS';
    const SP = 'SP';
    const SR = 'SR';
    const TX = 'TX';
    const VUS = 'VUS';
    const XRC = 'XRC';
            
    public static function choices(): array
    {
        return [
            self::BG => 'Blood gases',
            self::CH => 'Chemistry',
            self::CP => 'Cytopathology',
            self::CT => 'CAT scan',
            self::CUS => 'Cardiac Ultrasound',
            self::EC => 'Electrocardiac (e.g., EKG, EEC, Holter)',
            self::HM => 'Hematology',
            self::IMM => 'Immunology',
            self::MB => 'Microbiology',
            self::MCB => 'Mycobacteriology',
            self::MYC => 'Mycology',
            self::NMR => 'Nuclear magnetic resonance',
            self::NMS => 'Nuclear medicine scan',
            self::NRS => 'Nursing service measures',
            self::OT => 'Occupational Therapy',
            self::OTH => 'Other',
            self::OUS => 'OB Ultrasound',
            self::PHR => 'Pharmacy',
            self::PT => 'Physical Therapy',
            self::RC => 'Respiratory Care',
            self::RT => 'Radiation Therapy',
            self::RUS => 'Radiology ultrasound',
            self::SP => 'Surgical Pathology',
            self::SR => 'Serology',
            self::TX => 'Toxicology',
            self::VUS => 'Vascular Ultrasound',
            self::XRC => 'Cineradiography',
            ];
    }
      
}