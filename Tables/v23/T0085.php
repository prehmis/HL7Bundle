<?php
    
namespace Prehmis\HL7Bundle\Tables\v23;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0085
 * Observation Result Status Codes Interpretation
 * HL7 version 2.3
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
    const W = 'W';
    const X = 'X';
            
    public static function choices(): array
    {
        return [
            self::C => 'Record coming over is a correction and thus replaces a final result',
            self::D => 'Deletes the OBX record',
            self::F => 'Final results; Can only be changed with a corrected result.',
            self::I => 'Specimen in lab; results pending',
            self::P => 'Preliminary results',
            self::R => 'Results entered -- not verified',
            self::S => 'Partial results',
            self::U => 'Results status change to final without retransmitting results already sent as ‘preliminary.’  E.g., radiology changes status from preliminary to final',
            self::W => 'Post original as wrong, e.g., transmitted for wrong patient',
            self::X => 'Results cannot be obtained for this observation',
            ];
    }
      
}