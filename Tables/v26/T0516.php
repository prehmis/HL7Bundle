<?php
    
namespace Prehmis\HL7Bundle\Tables\v26;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0516
 * Error Severity
 * HL7 version 2.6
 *
 */
final class T0516 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ERROR = 'E';
    const FATAL_ERROR = 'F';
    const INFORMATION = 'I';
    const WARNING = 'W';
            
    public static function choices(): array
    {
        return [
            self::ERROR => 'Error',
            self::FATAL_ERROR => 'Fatal Error',
            self::INFORMATION => 'Information',
            self::WARNING => 'Warning',
            ];
    }
      
}