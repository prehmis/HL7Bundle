<?php
    
namespace Prehmis\HL7Bundle\Tables\v25;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0200
 * Name Type
 * HL7 version 2.5
 *
 */
final class T0200 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A = 'A';
    const B = 'B';
    const C = 'C';
    const D = 'D';
    const I = 'I';
    const L = 'L';
    const M = 'M';
    const N = 'N';
    const P = 'P';
    const R = 'R';
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
            self::I => 'Licensing Name',
            self::L => 'Legal Name',
            self::M => 'Maiden Name',
            self::N => 'Nickname /”Call me” Name/Street Name',
            self::P => 'Name of Partner/Spouse (retained for backward compatibility only)',
            self::R => 'Registered Name (animals only)',
            self::S => 'Coded Pseudo-Name to ensure anonymity',
            self::T => 'Indigenous/Tribal/Community Name',
            self::U => 'Unspecified',
            ];
    }
      
}