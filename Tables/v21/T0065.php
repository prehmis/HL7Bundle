<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0065
 * Specimen Action Code
 * HL7 version 2.1
 *
 */
final class T0065 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A = 'A';
    const C = 'C';
    const G = 'G';
    const L = 'L';
    const O = 'O';
    const P = 'P';
    const S = 'S';
            
    public static function choices(): array
    {
        return [
            self::A => 'Add ordered tests to the existing specimen',
            self::C => 'Cancel order for battery or tests named',
            self::G => 'Generated order',
            self::L => 'Lab to obtain specimen from patient.',
            self::O => 'Specimen obtained by service other than Lab',
            self::P => 'Pending specimen-Order sent prior to delivery',
            self::S => 'Schedule the tests specified below',
            ];
    }
      
}