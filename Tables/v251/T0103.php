<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0103
 * Processing ID
 * HL7 version 2.5.1
 *
 */
final class T0103 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const DEBUGGING = 'D';
    const PRODUCTION = 'P';
    const TRAINING = 'T';
            
    public static function choices(): array
    {
        return [
            self::DEBUGGING => 'Debugging',
            self::PRODUCTION => 'Production',
            self::TRAINING => 'Training',
            ];
    }
      
}