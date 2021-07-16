<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0125
 * Value Type
 * HL7 version 2.1
 *
 */
final class T0125 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AD = 'AD';
    const CK = 'CK';
    const FT = 'FT';
    const PN = 'PN';
    const ST = 'ST';
    const TM = 'TM';
    const TS = 'TS';
    const TX = 'TX';
            
    public static function choices(): array
    {
        return [
            self::AD => 'Address',
            self::CK => 'Composite ID with check digit',
            self::FT => 'Formatted Text',
            self::PN => 'Person name',
            self::ST => 'String data. Used to transmit numerics.',
            self::TM => 'Time',
            self::TS => 'Time stamp',
            self::TX => 'Text',
            ];
    }
      
}