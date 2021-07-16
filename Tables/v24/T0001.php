<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0001
 * Administrative Sex
 * HL7 version 2.4
 *
 */
final class T0001 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AMBIGUOUS = 'A';
    const FEMALE = 'F';
    const MALE = 'M';
    const NOT_APPLICABLE = 'N';
    const OTHER = 'O';
    const UNKNOWN = 'U';
            
    public static function choices(): array
    {
        return [
            self::AMBIGUOUS => 'Ambiguous',
            self::FEMALE => 'Female',
            self::MALE => 'Male',
            self::NOT_APPLICABLE => 'Not applicable',
            self::OTHER => 'Other',
            self::UNKNOWN => 'Unknown',
            ];
    }
      
}