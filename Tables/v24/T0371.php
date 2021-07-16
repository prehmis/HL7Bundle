<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0371
 * Additive/Preservative
 * HL7 version 2.4
 *
 */
final class T0371 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const BORATE = 'BOR';
    const C32 = 'C32';
    const C38 = 'C38';
    const POTASSIUM_K_EDTA = 'EDTK';
    const SODIUM_NA_EDTA = 'EDTN';
    const HCL6 = 'HCL6';
    const LITHIUM_LI___HEPARIN = 'HEPL';
    const SODIUM_NA___HEPARIN = 'HEPN';
            
    public static function choices(): array
    {
        return [
            self::BORATE => 'Borate',
            self::C32 => '3.2%  Citrate',
            self::C38 => '3.8% Citrate',
            self::POTASSIUM_K_EDTA => 'Potassium/K EDTA',
            self::SODIUM_NA_EDTA => 'Sodium/Na EDTA',
            self::HCL6 => '6N HCL',
            self::LITHIUM_LI___HEPARIN => 'Lithium/Li  Heparin',
            self::SODIUM_NA___HEPARIN => 'Sodium/Na  Heparin',
            ];
    }
      
}