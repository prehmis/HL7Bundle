<?php
    
namespace Prehmis\HL7Bundle\Tables\v271;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0371
 * Additive/Preservative
 * HL7 version 2.7.1
 *
 */
final class T0371 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ACDA = 'ACDA';
    const ACDB = 'ACDB';
    const ACET = 'ACET';
    const AMIES = 'AMIES';
    const BACTM = 'BACTM';
    const BF10 = 'BF10';
    const BOR = 'BOR';
    const BOUIN = 'BOUIN';
    const BSKM = 'BSKM';
    const C32 = 'C32';
    const C38 = 'C38';
    const CARS = 'CARS';
    const CARY = 'CARY';
    const CHLTM = 'CHLTM';
    const CTAD = 'CTAD';
    const EDTK = 'EDTK';
    const EDTK15 = 'EDTK15';
    const EDTK75 = 'EDTK75';
    const EDTN = 'EDTN';
    const ENT = 'ENT';
    const ENTP = 'ENT+';
    const F10 = 'F10';
    const FDP = 'FDP';
    const FL10 = 'FL10';
    const FL100 = 'FL100';
    const HCL6 = 'HCL6';
    const HEPA = 'HEPA';
    const HEPL = 'HEPL';
    const HEPN = 'HEPN';
    const HNO3 = 'HNO3';
    const JKM = 'JKM';
    const KARN = 'KARN';
    const KOX = 'KOX';
    const LIA = 'LIA';
    const M4 = 'M4';
    const M4RT = 'M4RT';
    const M5 = 'M5';
    const MICHTM = 'MICHTM';
    const MMDTM = 'MMDTM';
    const NAF = 'NAF';
    const NAPS = 'NAPS';
    const NONE = 'NONE';
    const PAGE = 'PAGE';
    const PHENOL = 'PHENOL';
    const PVA = 'PVA';
    const RLM = 'RLM';
    const SILICA = 'SILICA';
    const SPS = 'SPS';
    const SST = 'SST';
    const STUTM = 'STUTM';
    const THROM = 'THROM';
    const THYMOL = 'THYMOL';
    const THYO = 'THYO';
    const TOLU = 'TOLU';
    const URETM = 'URETM';
    const VIRTM = 'VIRTM';
    const WEST = 'WEST';
            
    public static function choices(): array
    {
        return [
            self::ACDA => 'ACD Solution A',
            self::ACDB => 'ACD Solution B',
            self::ACET => 'Acetic Acid',
            self::AMIES => 'Amies transport medium',
            self::BACTM => 'Bacterial Transport medium',
            self::BF10 => 'Buffered 10% formalin',
            self::BOR => 'Borate Boric Acid',
            self::BOUIN => 'Bouins solution',
            self::BSKM => 'Buffered skim milk',
            self::C32 => '3.2%  Citrate',
            self::C38 => '3.8% Citrate',
            self::CARS => 'Carsons Modified 10% formalin',
            self::CARY => 'Cary Blair Medium',
            self::CHLTM => 'Chlamydia transport medium',
            self::CTAD => 'CTAD (this should be spelled out if not universally understood)',
            self::EDTK => 'Potassium/K EDTA',
            self::EDTK15 => 'Potassium/K EDTA 15%',
            self::EDTK75 => 'Potassium/K EDTA 7.5%',
            self::EDTN => 'Sodium/Na EDTA',
            self::ENT => 'Enteric bacteria transport medium',
            self::ENTP => 'Enteric plus',
            self::F10 => '10% Formalin',
            self::FDP => 'Thrombin NIH; soybean trypsin inhibitor (Fibrin Degradation Products)',
            self::FL10 => 'Sodium Fluoride, 10mg',
            self::FL100 => 'Sodium Fluoride, 100mg',
            self::HCL6 => '6N HCL',
            self::HEPA => 'Ammonium heparin',
            self::HEPL => 'Lithium/Li  Heparin',
            self::HEPN => 'Sodium/Na  Heparin',
            self::HNO3 => 'Nitric Acid',
            self::JKM => 'Jones Kendrick Medium',
            self::KARN => 'Karnovskys fixative',
            self::KOX => 'Potassium Oxalate',
            self::LIA => 'Lithium iodoacetate',
            self::M4 => 'M4',
            self::M4RT => 'M4-RT',
            self::M5 => 'M5',
            self::MICHTM => 'Michels transport medium',
            self::MMDTM => 'MMD transport medium',
            self::NAF => 'Sodium Fluoride',
            self::NAPS => 'Sodium polyanethol sulfonate 0.35% in 0.85% sodium chloride',
            self::NONE => 'None',
            self::PAGE => 'Pagess Saline',
            self::PHENOL => 'Phenol',
            self::PVA => 'PVA (polyvinylalcohol)',
            self::RLM => 'Reagan Lowe Medium',
            self::SILICA => 'Siliceous earth, 12 mg',
            self::SPS => 'SPS(this should be spelled out if not universally understood)',
            self::SST => 'Serum Separator Tube (Polymer Gel)',
            self::STUTM => 'Stuart transport medium',
            self::THROM => 'Thrombin',
            self::THYMOL => 'Thymol',
            self::THYO => 'Thyoglycollate broth',
            self::TOLU => 'Toluene',
            self::URETM => 'Ureaplasma transport medium',
            self::VIRTM => 'Viral Transport medium',
            self::WEST => 'Buffered Citrate (Westergren Sedimentation Rate)',
            ];
    }
      
}