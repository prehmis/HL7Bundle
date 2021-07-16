<?php
    
namespace Prehmis\HL7Bundle\Tables\v27;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0488
 * Specimen Collection Method
 * HL7 version 2.7
 *
 */
final class T0488 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ANP = 'ANP';
    const BAP = 'BAP';
    const BCAE = 'BCAE';
    const BCAN = 'BCAN';
    const BCPD = 'BCPD';
    const BIO = 'BIO';
    const CAP = 'CAP';
    const CATH = 'CATH';
    const CVP = 'CVP';
    const EPLA = 'EPLA';
    const ESWA = 'ESWA';
    const FNA = 'FNA';
    const KOFFP = 'KOFFP';
    const LNA = 'LNA';
    const LNV = 'LNV';
    const MARTL = 'MARTL';
    const ML11 = 'ML11';
    const MLP = 'MLP';
    const NYP = 'NYP';
    const PACE = 'PACE';
    const PIN = 'PIN';
    const PNA = 'PNA';
    const PRIME = 'PRIME';
    const PUMP = 'PUMP';
    const QC5 = 'QC5';
    const SCLP = 'SCLP';
    const SCRAPS = 'SCRAPS';
    const SHA = 'SHA';
    const SWA = 'SWA';
    const SWD = 'SWD';
    const TMAN = 'TMAN';
    const TMCH = 'TMCH';
    const TMM4 = 'TMM4';
    const TMMY = 'TMMY';
    const TMOT = 'TMOT';
    const TMP = 'TMP';
    const TMPV = 'TMPV';
    const TMSC = 'TMSC';
    const TMUP = 'TMUP';
    const TMVI = 'TMVI';
    const VENIP = 'VENIP';
    const WOOD = 'WOOD';
            
    public static function choices(): array
    {
        return [
            self::ANP => 'Plates, Anaerobic',
            self::BAP => 'Plates, Blood Agar',
            self::BCAE => 'Blood Culture, Aerobic Bottle',
            self::BCAN => 'Blood Culture, Anaerobic Bottle',
            self::BCPD => 'Blood Culture, Pediatric Bottle',
            self::BIO => 'Biopsy',
            self::CAP => 'Capillary Specimen',
            self::CATH => 'Catheterized',
            self::CVP => 'Line, CVP',
            self::EPLA => 'Environmental, Plate',
            self::ESWA => 'Environmental, Swab',
            self::FNA => 'Aspiration, Fine Needle',
            self::KOFFP => 'Plate, Cough',
            self::LNA => 'Line, Arterial',
            self::LNV => 'Line, Venous',
            self::MARTL => 'Martin-Lewis Agar',
            self::ML11 => 'Mod. Martin-Lewis Agar',
            self::MLP => 'Plate, Martin-Lewis',
            self::NYP => 'Plate, New York City',
            self::PACE => 'Pace, Gen-Probe',
            self::PIN => 'Pinworm Prep',
            self::PNA => 'Arterial puncture',
            self::PRIME => 'Pump Prime',
            self::PUMP => 'Pump Specimen',
            self::QC5 => 'Quality Control For Micro',
            self::SCLP => 'Scalp, Fetal Vein',
            self::SCRAPS => 'Scrapings',
            self::SHA => 'Shaving',
            self::SWA => 'Swab',
            self::SWD => 'Swab, Dacron tipped',
            self::TMAN => 'Transport Media, Anaerobic',
            self::TMCH => 'Transport Media, Chalamydia',
            self::TMM4 => 'Transport Media, M4',
            self::TMMY => 'Transport Media, Mycoplasma',
            self::TMOT => 'Transport Media,',
            self::TMP => 'Plate, Thayer-Martin',
            self::TMPV => 'Transport Media, PVA',
            self::TMSC => 'Transport Media, Stool Culture',
            self::TMUP => 'Transport Media, Ureaplasma',
            self::TMVI => 'Transport Media, Viral',
            self::VENIP => 'Venipuncture',
            self::WOOD => 'Swab, Wooden Shaft',
            ];
    }
      
}