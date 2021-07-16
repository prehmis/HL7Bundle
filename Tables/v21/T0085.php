<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0085
 * Observation Result Status Codes Interpretation
 * HL7 version 2.1
 *
 */
final class T0085 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const D = 'D';
    const F = 'F';
    const I = 'I';
    const R = 'R';
    const S = 'S';
            
    public static function choices(): array
    {
        return [
            self::D => 'Delete previously transmitted observation',
            self::F => 'Complete/final results (entered and verified)',
            self::I => 'Specimen in lab--results pending',
            self::R => 'Results entered - not verified',
            self::S => 'Partial results',
            ];
    }
      
}