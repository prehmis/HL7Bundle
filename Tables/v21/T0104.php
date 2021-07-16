<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0104
 * Version ID
 * HL7 version 2.1
 *
 */
final class T0104 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const RELEASE_2_0__SEPTEMBER_1988 = '2.0';
    const DEMO____2_0__OCTOBER_1988 = '2.0D';
    const RELEASE_2_1__MARCH_1990 = '2.1';
            
    public static function choices(): array
    {
        return [
            self::RELEASE_2_0__SEPTEMBER_1988 => 'Release 2.0  September 1988',
            self::DEMO____2_0__OCTOBER_1988 => 'Demo    2.0  October 1988',
            self::RELEASE_2_1__MARCH_1990 => 'Release 2.1  March 1990',
            ];
    }
      
}