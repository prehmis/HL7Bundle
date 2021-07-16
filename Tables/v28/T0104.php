<?php
    
namespace Prehmis\HL7Bundle\Tables\v28;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0104
 * Version ID
 * HL7 version 2.8
 *
 */
class T0104 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const RELEASE_2_0 = '2.0';
    const DEMO_2_0 = '2.0D';
    const RELEASE_2_1 = '2.1';
    const RELEASE_2_2 = '2.2';
    const RELEASE_2_3 = '2.3';
    const RELEASE_2_3_1 = '2.3.1';
    const RELEASE_2_4 = '2.4';
    const RELEASE_2_5 = '2.5';
    const RELEASE_2_5_1 = '2.5.1';
    const RELEASE_2_6 = '2.6';
    const RELEASE_2_7 = '2.7';
    const RELEASE_2_7_1 = '2.7.1';
    const RELEASE_2_8 = '2.8';
            
    public static function choices(): array
    {
        return [
            self::RELEASE_2_0 => 'Release 2.0',
            self::DEMO_2_0 => 'Demo 2.0',
            self::RELEASE_2_1 => 'Release 2.1',
            self::RELEASE_2_2 => 'Release 2.2',
            self::RELEASE_2_3 => 'Release 2.3',
            self::RELEASE_2_3_1 => 'Release 2.3.1',
            self::RELEASE_2_4 => 'Release 2.4',
            self::RELEASE_2_5 => 'Release 2.5',
            self::RELEASE_2_5_1 => 'Release 2.5.1',
            self::RELEASE_2_6 => 'Release 2.6',
            self::RELEASE_2_7 => 'Release 2.7',
            self::RELEASE_2_7_1 => 'Release 2.7.1',
            self::RELEASE_2_8 => 'Release 2.8',
            ];
    }
      
}