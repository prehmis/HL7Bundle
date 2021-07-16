<?php
    
namespace Prehmis\HL7Bundle\Tables\v28;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0190
 * Address Type
 * HL7 version 2.8
 *
 */
final class T0190 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const B = 'B';
    const BA = 'BA';
    const BDL = 'BDL';
    const BI = 'BI';
    const BR = 'BR';
    const C = 'C';
    const F = 'F';
    const H = 'H';
    const L = 'L';
    const M = 'M';
    const N = 'N';
    const O = 'O';
    const P = 'P';
    const RH = 'RH';
    const S = 'S';
    const SH = 'SH';
    const TM = 'TM';
    const V = 'V';
            
    public static function choices(): array
    {
        return [
            self::B => 'Firm/Business',
            self::BA => 'Bad address',
            self::BDL => 'Birth delivery location  (address where birth occurred)',
            self::BI => 'Billing Address',
            self::BR => 'Residence at birth (home address at time of birth)',
            self::C => 'Current Or Temporary',
            self::F => 'Country Of Origin',
            self::H => 'Home',
            self::L => 'Legal Address',
            self::M => 'Mailing',
            self::N => 'Birth (nee)  (birth address, not otherwise specified)',
            self::O => 'Office/Business',
            self::P => 'Permanent',
            self::RH => 'Registry home. Refers to the information system, typically managed by a public health agency, that stores patient information such as immunization histories or cancer data, regardless of where the patient obtains services.',
            self::S => 'Service Location',
            self::SH => 'Shipping Address',
            self::TM => 'Tube Address',
            self::V => 'Vacation',
            ];
    }
      
}