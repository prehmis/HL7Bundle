<?php
    
namespace Prehmis\HL7Bundle\Tables\v26;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0492
 * Specimen Appropriateness
 * HL7 version 2.6
 *
 */
final class T0492 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const INAPPROPRIATE_DUE_TO____ = '??';
    const APPROPRIATE = 'A';
    const INAPPROPRIATE = 'I';
    const PREFERRED = 'P';
            
    public static function choices(): array
    {
        return [
            self::INAPPROPRIATE_DUE_TO____ => 'Inappropriate due to ...',
            self::APPROPRIATE => 'Appropriate',
            self::INAPPROPRIATE => 'Inappropriate',
            self::PREFERRED => 'Preferred',
            ];
    }
      
}