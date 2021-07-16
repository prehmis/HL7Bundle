<?php
    
namespace Prehmis\HL7Bundle\Tables\v27;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0121
 * Response Flag
 * HL7 version 2.7
 *
 */
final class T0121 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const D = 'D';
    const E = 'E';
    const F = 'F';
    const N = 'N';
    const R = 'R';
            
    public static function choices(): array
    {
        return [
            self::D => 'Same as R, also other associated segments',
            self::E => 'Report exceptions only',
            self::F => 'Same as D, plus confirmations explicitly',
            self::N => 'Only the MSA segment is returned',
            self::R => 'Same as E, also Replacement and Parent-Child',
            ];
    }
      
}