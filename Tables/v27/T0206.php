<?php
    
namespace Prehmis\HL7Bundle\Tables\v27;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0206
 * Segment action code
 * HL7 version 2.7
 *
 */
final class T0206 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ADD_INSERT = 'A';
    const DELETE = 'D';
    const UPDATE = 'U';
    const NO_CHANGE = 'X';
            
    public static function choices(): array
    {
        return [
            self::ADD_INSERT => 'Add/Insert',
            self::DELETE => 'Delete',
            self::UPDATE => 'Update',
            self::NO_CHANGE => 'No Change',
            ];
    }
      
}