<?php
    
namespace Prehmis\HL7Bundle\Tables\v23;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0200
 * Name Type
 * HL7 version 2.3
 *
 */
final class T0200 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ALIAS_NAME = 'A';
    const ADOPTED_NAME = 'C';
    const DISPLAY_NAME = 'D';
    const LEGAL_NAME = 'L';
    const MAIDEN_NAME = 'M';
    const OTHER = 'O';
            
    public static function choices(): array
    {
        return [
            self::ALIAS_NAME => 'Alias Name',
            self::ADOPTED_NAME => 'Adopted Name',
            self::DISPLAY_NAME => 'Display Name',
            self::LEGAL_NAME => 'Legal Name',
            self::MAIDEN_NAME => 'Maiden Name',
            self::OTHER => 'Other',
            ];
    }
      
}