<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0007
 * Admission Type
 * HL7 version 2.1
 *
 */
final class T0007 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ACCIDENT = 'A';
    const EMERGENCY = 'E';
    const LABOR_AND_DELIVERY = 'L';
    const ROUTINE = 'R';
            
    public static function choices(): array
    {
        return [
            self::ACCIDENT => 'Accident',
            self::EMERGENCY => 'Emergency',
            self::LABOR_AND_DELIVERY => 'Labor and Delivery',
            self::ROUTINE => 'Routine',
            ];
    }
      
}