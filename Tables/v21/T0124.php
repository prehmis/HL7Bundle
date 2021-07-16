<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0124
 * Transportation Mode
 * HL7 version 2.1
 *
 */
final class T0124 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const PORT = 'PORT';
    const WALK = 'WALK';
    const WHLC = 'WHLC';
            
    public static function choices(): array
    {
        return [
            self::PORT => 'The examining device goes to Patients Loc.',
            self::WALK => 'Patient walks to diagnostic service',
            self::WHLC => 'Wheelchair',
            ];
    }
      
}