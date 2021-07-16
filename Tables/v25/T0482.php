<?php
    
namespace Prehmis\HL7Bundle\Tables\v25;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0482
 * Order Type
 * HL7 version 2.5
 *
 */
final class T0482 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const INPATIENT_ORDER = 'I';
    const OUTPATIENT_ORDER = 'O';
            
    public static function choices(): array
    {
        return [
            self::INPATIENT_ORDER => 'Inpatient Order',
            self::OUTPATIENT_ORDER => 'Outpatient Order',
            ];
    }
      
}