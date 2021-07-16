<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0516
 * Error Severity
 * HL7 version 2.5.1
 *
 */
final class T0516 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ERROR = 'E';
    const INFORMATION = 'I';
    const WARNING = 'W';
            
    public static function choices(): array
    {
        return [
            self::ERROR => 'Error',
            self::INFORMATION => 'Information',
            self::WARNING => 'Warning',
            ];
    }
      
}