<?php
    
namespace Prehmis\HL7Bundle\Tables\v25;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0494
 * Specimen Child Role
 * HL7 version 2.5
 *
 */
final class T0494 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A = 'A';
    const C = 'C';
    const M = 'M';
            
    public static function choices(): array
    {
        return [
            self::A => 'Aliquot',
            self::C => 'Component',
            self::M => 'Modified from original specimen',
            ];
    }
      
}