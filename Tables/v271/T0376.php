<?php
    
namespace Prehmis\HL7Bundle\Tables\v271;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0376
 * Special Handling Code
 * HL7 version 2.7.1
 *
 */
final class T0376 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AMB = 'AMB';
    const C37 = 'C37';
    const CAMB = 'CAMB';
    const CATM = 'CATM';
    const CFRZ = 'CFRZ';
    const CREF = 'CREF';
    const DFRZ = 'DFRZ';
    const DRY = 'DRY';
    const FRZ = 'FRZ';
    const MTLF = 'MTLF';
    const NTR = 'NTR';
    const PRTL = 'PRTL';
    const PSA = 'PSA';
    const PSO = 'PSO';
    const REF = 'REF';
    const UFRZ = 'UFRZ';
    const UPR = 'UPR';
            
    public static function choices(): array
    {
        return [
            self::AMB => 'Ambient temperature',
            self::C37 => 'Body temperature',
            self::CAMB => 'Critical ambient temperature',
            self::CATM => 'Protect from air',
            self::CFRZ => 'Critical frozen temperature',
            self::CREF => 'Critical refrigerated temperature',
            self::DFRZ => 'Deep frozen',
            self::DRY => 'Dry',
            self::FRZ => 'Frozen temperature',
            self::MTLF => 'Metal Free',
            self::NTR => 'Liquid nitrogen',
            self::PRTL => 'Protect from light',
            self::PSA => 'Do not shake',
            self::PSO => 'No shock',
            self::REF => 'Refrigerated temperature',
            self::UFRZ => 'Ultra frozen',
            self::UPR => 'Upright',
            ];
    }
      
}