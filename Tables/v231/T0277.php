<?php
    
namespace Prehmis\HL7Bundle\Tables\v231;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0277
 * Appointment Type Codes
 * HL7 version 2.3.1
 *
 */
final class T0277 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const COMPLETE = 'COMPLETE';
    const NORMAL = 'NORMAL';
    const TENTATIVE = 'TENTATIVE';
            
    public static function choices(): array
    {
        return [
            self::COMPLETE => 'A request to add a completed appointment, used to maintain records of completed appointments',
            self::NORMAL => 'Routine schedule request type - default if not valued',
            self::TENTATIVE => 'A request for a tentative (e.g., penciled in) appointment',
            ];
    }
      
}