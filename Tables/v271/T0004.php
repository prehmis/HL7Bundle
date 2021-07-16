<?php
    
namespace Prehmis\HL7Bundle\Tables\v271;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0004
 * Patient Class
 * HL7 version 2.7.1
 *
 */
final class T0004 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const OBSTETRICS = 'B';
    const COMMERCIAL_ACCOUNT = 'C';
    const EMERGENCY = 'E';
    const INPATIENT = 'I';
    const NOT_APPLICABLE = 'N';
    const OUTPATIENT = 'O';
    const PREADMIT = 'P';
    const RECURRING_PATIENT = 'R';
    const UNKNOWN = 'U';
            
    public static function choices(): array
    {
        return [
            self::OBSTETRICS => 'Obstetrics',
            self::COMMERCIAL_ACCOUNT => 'Commercial Account',
            self::EMERGENCY => 'Emergency',
            self::INPATIENT => 'Inpatient',
            self::NOT_APPLICABLE => 'Not Applicable',
            self::OUTPATIENT => 'Outpatient',
            self::PREADMIT => 'Preadmit',
            self::RECURRING_PATIENT => 'Recurring patient',
            self::UNKNOWN => 'Unknown',
            ];
    }
      
}