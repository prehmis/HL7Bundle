<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0190
 * Address Type
 * HL7 version 2.2
 *
 */
final class T0190 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const BUSINESS = 'B';
    const CURRENT_OR_TEMPORARY = 'C';
    const HOME = 'H';
    const MAILING = 'M';
    const OFFICE = 'O';
    const PERMANENT = 'P';
            
    public static function choices(): array
    {
        return [
            self::BUSINESS => 'Business',
            self::CURRENT_OR_TEMPORARY => 'Current or Temporary',
            self::HOME => 'Home',
            self::MAILING => 'Mailing',
            self::OFFICE => 'Office',
            self::PERMANENT => 'Permanent',
            ];
    }
      
}