<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0004
 * Patient Class
 * HL7 version 2.1
 *
 */
final class T0004 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const EMERGENCY = 'E';
    const INPATIENT = 'I';
    const OUTPATIENT = 'O';
    const PREADMIT = 'P';
            
    public static function choices(): array
    {
        return [
            self::EMERGENCY => 'Emergency',
            self::INPATIENT => 'Inpatient',
            self::OUTPATIENT => 'Outpatient',
            self::PREADMIT => 'Preadmit',
            ];
    }
      
}