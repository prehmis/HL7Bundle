<?php
    
namespace Prehmis\HL7Bundle\Tables\v27;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0369
 * Specimen Role
 * HL7 version 2.7
 *
 */
final class T0369 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const B = 'B';
    const C = 'C';
    const E = 'E';
    const F = 'F';
    const G = 'G';
    const L = 'L';
    const O = 'O';
    const P = 'P';
    const Q = 'Q';
    const R = 'R';
    const V = 'V';
            
    public static function choices(): array
    {
        return [
            self::B => 'Blind Sample',
            self::C => 'Calibrator, used for initial setting of calibration',
            self::E => 'Electronic QC, used with manufactured reference providing signals that simulate QC results',
            self::F => 'Specimen used for testing proficiency of the organization performing the testing (Filler)',
            self::G => 'Group (where a specimen consists of multiple individual elements that are not individually identified)',
            self::L => 'Pool (aliquots of individual specimens combined to form a single specimen representing all of the components.)',
            self::O => 'Specimen used for testing Operator Proficiency',
            self::P => 'Patient (default if blank component value)',
            self::Q => 'Control specimen',
            self::R => 'Replicate (of patient sample as a control)',
            self::V => 'Verifying Calibrator, used for periodic calibration checks',
            ];
    }
      
}