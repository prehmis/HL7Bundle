<?php
    
namespace Prehmis\HL7Bundle\Tables\v23;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0001
 * Administrative Sex
 * HL7 version 2.3
 *
 */
final class T0001 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const FEMALE = 'F';
    const MALE = 'M';
    const OTHER = 'O';
    const UNKNOWN = 'U';
            
    public static function choices(): array
    {
        return [
            self::FEMALE => 'Female',
            self::MALE => 'Male',
            self::OTHER => 'Other',
            self::UNKNOWN => 'Unknown',
            ];
    }
      
}