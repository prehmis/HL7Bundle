<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0005
 * Race
 * HL7 version 2.1
 *
 */
final class T0005 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const BLACK = 'B';
    const CAUCASIAN = 'C';
    const HISPANIC = 'H';
    const ORIENTAL = 'R';
            
    public static function choices(): array
    {
        return [
            self::BLACK => 'Black',
            self::CAUCASIAN => 'Caucasian',
            self::HISPANIC => 'Hispanic',
            self::ORIENTAL => 'Oriental',
            ];
    }
      
}