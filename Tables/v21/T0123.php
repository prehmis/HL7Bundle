<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0123
 * Result Status
 * HL7 version 2.1
 *
 */
final class T0123 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const C = 'C';
    const F = 'F';
    const I = 'I';
    const P = 'P';
    const R = 'R';
    const S = 'S';
    const Y = 'Y';
    const Z = 'Z';
            
    public static function choices(): array
    {
        return [
            self::C => 'Correction of previously transmitted results',
            self::F => 'Final results - results stored & verified',
            self::I => 'Specimen in lab, not yet processed.',
            self::P => 'Preliminary results',
            self::R => 'Results stored - not yet verified',
            self::S => 'Procedure scheduled, not done',
            self::Y => 'No order on record for this test',
            self::Z => 'No record of this patient',
            ];
    }
      
}