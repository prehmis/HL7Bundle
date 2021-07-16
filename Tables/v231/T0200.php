<?php
    
namespace Prehmis\HL7Bundle\Tables\v231;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0200
 * Name Type
 * HL7 version 2.3.1
 *
 */
final class T0200 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A = 'A';
    const B = 'B';
    const C = 'C';
    const D = 'D';
    const L = 'L';
    const M = 'M';
    const P = 'P';
    const S = 'S';
    const T = 'T';
    const U = 'U';
            
    public static function choices(): array
    {
        return [
            self::A => 'Alias Name',
            self::B => 'Name at Birth',
            self::C => 'Adopted Name',
            self::D => 'Display Name',
            self::L => 'Legal Name',
            self::M => 'Maiden Name',
            self::P => 'Name of Partner/Spouse',
            self::S => 'Coded Pseudo-Name to ensure anonymity',
            self::T => 'Tribal/Community Name',
            self::U => 'Unspecified',
            ];
    }
      
}