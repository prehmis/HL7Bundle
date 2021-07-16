<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0008
 * Acknowledgment Code
 * HL7 version 2.1
 *
 */
final class T0008 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AA = 'AA';
    const AE = 'AE';
    const AR = 'AR';
            
    public static function choices(): array
    {
        return [
            self::AA => 'Application Accept',
            self::AE => 'Application Error',
            self::AR => 'Application Reject',
            ];
    }
      
}