<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0305
 * Person Location Type
 * HL7 version 2.5.1
 *
 */
final class T0305 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const CLINIC = 'C';
    const DEPARTMENT = 'D';
    const HOME = 'H';
    const NURSING_UNIT = 'N';
    const PROVIDERS_OFFICE = 'O';
    const PHONE = 'P';
    const SNF = 'S';
            
    public static function choices(): array
    {
        return [
            self::CLINIC => 'Clinic',
            self::DEPARTMENT => 'Department',
            self::HOME => 'Home',
            self::NURSING_UNIT => 'Nursing Unit',
            self::PROVIDERS_OFFICE => 'Providers Office',
            self::PHONE => 'Phone',
            self::SNF => 'SNF',
            ];
    }
      
}