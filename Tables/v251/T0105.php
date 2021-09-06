<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0105
 * Source of Comment
 * HL7 version 2.5.1
 *
 */
final class T0105 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const L = 'L';
    const O = 'O';
    const P = 'P';
            
    public static function choices(): array
    {
        return [
            self::L => 'Ancillary (filler) department is source of comment',
            self::O => 'Other system is source of comment',
            self::P => 'Orderer (placer) is source of comment',
            ];
    }
      
}