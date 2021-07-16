<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0004
 * Patient Class
 * HL7 version 2.2
 *
 */
final class T0004 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const OBSTETRICS = 'B';
    const EMERGENCY = 'E';
    const INPATIENT = 'I';
    const OUTPATIENT = 'O';
    const PREADMIT = 'P';
    const RECURRING_PATIENT = 'R';
            
    public static function choices(): array
    {
        return [
            self::OBSTETRICS => 'Obstetrics',
            self::EMERGENCY => 'Emergency',
            self::INPATIENT => 'Inpatient',
            self::OUTPATIENT => 'Outpatient',
            self::PREADMIT => 'Preadmit',
            self::RECURRING_PATIENT => 'Recurring Patient',
            ];
    }
      
}