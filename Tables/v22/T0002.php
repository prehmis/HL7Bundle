<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0002
 * Marital Status
 * HL7 version 2.2
 *
 */
final class T0002 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const SEPARATED = 'A';
    const DIVORCED = 'D';
    const MARRIED = 'M';
    const SINGLE = 'S';
    const WIDOWED = 'W';
            
    public static function choices(): array
    {
        return [
            self::SEPARATED => 'Separated',
            self::DIVORCED => 'Divorced',
            self::MARRIED => 'Married',
            self::SINGLE => 'Single',
            self::WIDOWED => 'Widowed',
            ];
    }
      
}