<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0136
 * Yes/no Indicator
 * HL7 version 2.5.1
 *
 */
final class T0136 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const NO = 'N';
    const YES = 'Y';
            
    public static function choices(): array
    {
        return [
            self::NO => 'No',
            self::YES => 'Yes',
            ];
    }
      
}