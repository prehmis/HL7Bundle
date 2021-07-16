<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0155
 * Accept/Application Acknowledgment Conditions
 * HL7 version 2.5.1
 *
 */
final class T0155 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ALWAYS = 'AL';
    const ERROR_REJECT_CONDITIONS_ONLY = 'ER';
    const NEVER = 'NE';
    const SUCCESSFUL_COMPLETION_ONLY = 'SU';
            
    public static function choices(): array
    {
        return [
            self::ALWAYS => 'Always',
            self::ERROR_REJECT_CONDITIONS_ONLY => 'Error/reject conditions only',
            self::NEVER => 'Never',
            self::SUCCESSFUL_COMPLETION_ONLY => 'Successful completion only',
            ];
    }
      
}