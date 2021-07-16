<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0091
 * Query Priority
 * HL7 version 2.4
 *
 */
final class T0091 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const DEFERRED = 'D';
    const IMMEDIATE = 'I';
            
    public static function choices(): array
    {
        return [
            self::DEFERRED => 'Deferred',
            self::IMMEDIATE => 'Immediate',
            ];
    }
      
}