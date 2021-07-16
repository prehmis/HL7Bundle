<?php
    
namespace Prehmis\HL7Bundle\Tables\v28;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0491
 * Specimen Quality
 * HL7 version 2.8
 *
 */
final class T0491 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const EXCELLENT = 'E';
    const FAIR = 'F';
    const GOOD = 'G';
    const POOR = 'P';
            
    public static function choices(): array
    {
        return [
            self::EXCELLENT => 'Excellent',
            self::FAIR => 'Fair',
            self::GOOD => 'Good',
            self::POOR => 'Poor',
            ];
    }
      
}