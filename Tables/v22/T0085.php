<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0085
 * Observation Result Status Codes Interpretation
 * HL7 version 2.2
 *
 */
final class T0085 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const C = 'C';
    const D = 'D';
    const F = 'F';
    const I = 'I';
    const P = 'P';
    const R = 'R';
    const S = 'S';
    const U = 'U';
    const X = 'X';
            
    public static function choices(): array
    {
        return [
            self::C => 'Record coming over is a correction and thus replaces a result',
            self::D => 'Deletes the OBX record',
            self::F => 'Final results (can only be changed with a corrected result)',
            self::I => 'Specimen in lab - results pending',
            self::P => 'Preliminary results',
            self::R => 'Results entered - not verified',
            self::S => 'Partial results',
            self::U => 'Results status change to Final - results did not change ( dont transmit test)',
            self::X => 'Results cannot be obtained for this observation',
            ];
    }
      
}