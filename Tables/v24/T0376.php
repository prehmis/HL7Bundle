<?php
    
namespace Prehmis\HL7Bundle\Tables\v24;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0376
 * Special Handling Code
 * HL7 version 2.4
 *
 */
final class T0376 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const C37 = 'C37';
    const CAMB = 'CAMB';
    const CATM = 'CATM';
    const CFRZ = 'CFRZ';
    const CREF = 'CREF';
    const PRTL = 'PRTL';
            
    public static function choices(): array
    {
        return [
            self::C37 => 'Critical maintain at 37C (e.g., cryoglobulin specimen)',
            self::CAMB => 'Critical ambient temperature',
            self::CATM => 'Critical do not expose to atmosphere - Do not uncap',
            self::CFRZ => 'Critical Frozen',
            self::CREF => 'Critical refrigerated',
            self::PRTL => 'Protect from light',
            ];
    }
      
}