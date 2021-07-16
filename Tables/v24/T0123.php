<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0123
 * Result Status
 * HL7 version 2.4
 *
 */
final class T0123 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A = 'A';
    const C = 'C';
    const F = 'F';
    const I = 'I';
    const O = 'O';
    const P = 'P';
    const R = 'R';
    const S = 'S';
    const X = 'X';
    const Y = 'Y';
    const Z = 'Z';
            
    public static function choices(): array
    {
        return [
            self::A => 'Some, but not all, results available',
            self::C => 'Correction to results',
            self::F => 'Final results; results stored and verified.  Can only be changed with a corrected result.',
            self::I => 'No results available; specimen received, procedure incomplete',
            self::O => 'Order received; specimen not yet received',
            self::P => 'Preliminary: A verified early result is available, final results not yet obtained',
            self::R => 'Results stored; not yet verified',
            self::S => 'No results available; procedure scheduled, but not done',
            self::X => 'No results available; Order canceled.',
            self::Y => 'No order on record for this test.  (Used only on queries)',
            self::Z => 'No record of this patient. (Used only on queries)',
            ];
    }
      
}