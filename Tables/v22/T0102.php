<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0102
 * Delayed acknowledgment type
 * HL7 version 2.2
 *
 */
final class T0102 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const D = 'D';
    const F = 'F';
            
    public static function choices(): array
    {
        return [
            self::D => 'Message Received, stored for later processing',
            self::F => 'Acknowledgement after processing',
            ];
    }
      
}