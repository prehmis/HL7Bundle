<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0369
 * Specimen Role
 * HL7 version 2.4
 *
 */
final class T0369 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const B = 'B';
    const C = 'C';
    const P = 'P';
    const Q = 'Q';
    const R = 'R';
            
    public static function choices(): array
    {
        return [
            self::B => 'Blind Sample',
            self::C => 'Calibrator',
            self::P => 'Patient (default if blank component value)',
            self::Q => 'Control specimen',
            self::R => 'Replicate (of patient sample as a control)',
            ];
    }
      
}