<?php
    
namespace Prehmis\HL7Bundle\Tables\v28;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0005
 * Race
 * HL7 version 2.8
 *
 */
final class T0005 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AMERICAN_INDIAN = '1002-5';
    const ASIAN = '2028-9';
    const BLACK_OR_AFRICAN_AMERICAN = '2054-5';
    const NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER = '2076-8';
    const WHITE = '2106-3';
    const OTHER_RACE = '2131-1';
            
    public static function choices(): array
    {
        return [
            self::AMERICAN_INDIAN => 'American Indian or Alaska Native',
            self::ASIAN => 'Asian',
            self::BLACK_OR_AFRICAN_AMERICAN => 'Black or African American',
            self::NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER => 'Native Hawaiian or Other Pacific Islander',
            self::WHITE => 'White',
            self::OTHER_RACE => 'Other Race',
            ];
    }
      
}