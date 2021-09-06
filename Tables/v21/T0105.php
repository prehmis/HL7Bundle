<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0105
 * Source of Comment
 * HL7 version 2.1
 *
 */
final class T0105 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const L = 'L';
    const P = 'P';
            
    public static function choices(): array
    {
        return [
            self::L => 'Ancillary department is source of comment',
            self::P => 'Orderer is source of comment',
            ];
    }
      
}