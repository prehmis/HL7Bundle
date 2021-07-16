<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0125
 * Value Type
 * HL7 version 2.2
 *
 */
final class T0125 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AD = 'AD';
    const CE = 'CE';
    const CF = 'CF';
    const CK = 'CK';
    const CM = 'CM';
    const CN = 'CN';
    const CQ = 'CQ';
    const DT = 'DT';
    const FT = 'FT';
    const ID = 'ID';
    const MO = 'MO';
    const NM = 'NM';
    const PN = 'PN';
    const RP = 'RP';
    const SI = 'SI';
    const ST = 'ST';
    const TM = 'TM';
    const TN = 'TN';
    const TQ = 'TQ';
    const TS = 'TS';
    const TX = 'TX';
            
    public static function choices(): array
    {
        return [
            self::AD => 'Address',
            self::CE => 'Coded element',
            self::CF => 'Coded element with formatted values',
            self::CK => 'Composite ID with check digit',
            self::CM => 'Composite',
            self::CN => 'Composite ID and name',
            self::CQ => 'Composite quantity with units',
            self::DT => 'Date',
            self::FT => 'Formatted text (display)',
            self::ID => 'Coded value',
            self::MO => 'Money',
            self::NM => 'Numeric',
            self::PN => 'Person name',
            self::RP => 'Reference pointer',
            self::SI => 'Sequence ID',
            self::ST => 'String data',
            self::TM => 'Time',
            self::TN => 'Telephone number',
            self::TQ => 'Timing / quantity',
            self::TS => 'Time stamp ( date & time)',
            self::TX => 'Text data (display)',
            ];
    }
      
}