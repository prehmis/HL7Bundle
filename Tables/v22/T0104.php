<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0104
 * Version ID
 * HL7 version 2.2
 *
 */
final class T0104 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const VERSION_2_0__SEPTEMBER_1988 = '2.0';
    const DEMO____2_0__OCTOBER_1988 = '2.0D';
    const RELEASE_2_1__MARCH_1990 = '2.1';
    const RELEASE_2_2__DECEMBER_1994 = '2.2';
            
    public static function choices(): array
    {
        return [
            self::VERSION_2_0__SEPTEMBER_1988 => 'Version 2.0, September 1988',
            self::DEMO____2_0__OCTOBER_1988 => 'Demo    2.0  October 1988',
            self::RELEASE_2_1__MARCH_1990 => 'Release 2.1  March 1990',
            self::RELEASE_2_2__DECEMBER_1994 => 'Release 2.2  December 1994',
            ];
    }
      
}