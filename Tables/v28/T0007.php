<?php
    
namespace Prehmis\HL7Bundle\Tables\v28;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0007
 * Admission Type
 * HL7 version 2.8
 *
 */
final class T0007 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A = 'A';
    const C = 'C';
    const E = 'E';
    const L = 'L';
    const N = 'N';
    const R = 'R';
    const U = 'U';
            
    public static function choices(): array
    {
        return [
            self::A => 'Accident',
            self::C => 'Elective',
            self::E => 'Emergency',
            self::L => 'Labor and Delivery',
            self::N => 'Newborn (Birth in healthcare facility)',
            self::R => 'Routine',
            self::U => 'Urgent',
            ];
    }
      
}