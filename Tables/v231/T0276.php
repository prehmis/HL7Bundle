<?php
    
namespace Prehmis\HL7Bundle\Tables\v231;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0276
 * Appointment reason codes
 * HL7 version 2.3.1
 *
 */
final class T0276 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const CHECKUP = 'CHECKUP';
    const EMERGENCY = 'EMERGENCY';
    const FOLLOWUP = 'FOLLOWUP';
    const ROUTINE = 'ROUTINE';
    const WALKIN = 'WALKIN';
            
    public static function choices(): array
    {
        return [
            self::CHECKUP => 'A routine check-up, such as an annual physical',
            self::EMERGENCY => 'Emergency appointment',
            self::FOLLOWUP => 'A follow up visit from a previous appointment',
            self::ROUTINE => 'Routine appointment - default if not valued',
            self::WALKIN => 'A previously unscheduled walk-in visit',
            ];
    }
      
}