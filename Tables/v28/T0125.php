<?php
    
namespace Prehmis\HL7Bundle\Tables\v28;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0125
 * Value Type
 * HL7 version 2.8
 *
 */
final class T0125 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AD = 'AD';
    const CF = 'CF';
    const CK = 'CK';
    const CN = 'CN';
    const CNE = 'CNE';
    const CP = 'CP';
    const CWE = 'CWE';
    const CX = 'CX';
    const DR = 'DR';
    const DT = 'DT';
    const DTM = 'DTM';
    const ED = 'ED';
    const FT = 'FT';
    const ID = 'ID';
    const IS = 'IS';
    const MA = 'MA';
    const MO = 'MO';
    const NA = 'NA';
    const NM = 'NM';
    const PN = 'PN';
    const RP = 'RP';
    const SN = 'SN';
    const ST = 'ST';
    const TM = 'TM';
    const TN = 'TN';
    const TX = 'TX';
    const XAD = 'XAD';
    const XCN = 'XCN';
    const XON = 'XON';
    const XPN = 'XPN';
    const XTN = 'XTN';
            
    public static function choices(): array
    {
        return [
            self::AD => 'Address',
            self::CF => 'Coded Element With Formatted Values',
            self::CK => 'Composite ID With Check Digit',
            self::CN => 'Composite ID And Name',
            self::CNE => 'Coded with No Exceptions',
            self::CP => 'Composite Price',
            self::CWE => 'Coded Entry',
            self::CX => 'Extended Composite ID With Check Digit',
            self::DR => 'Date/Time Range',
            self::DT => 'Date',
            self::DTM => 'Time Stamp (Date & Time)',
            self::ED => 'Encapsulated Data',
            self::FT => 'Formatted Text (Display)',
            self::ID => 'Coded Value for HL7 Defined Tables',
            self::IS => 'Coded Value for User-Defined Tables',
            self::MA => 'Multiplexed Array',
            self::MO => 'Money',
            self::NA => 'Numeric Array',
            self::NM => 'Numeric',
            self::PN => 'Person Name',
            self::RP => 'Reference Pointer',
            self::SN => 'Structured Numeric',
            self::ST => 'String Data.',
            self::TM => 'Time',
            self::TN => 'Telephone Number',
            self::TX => 'Text Data (Display)',
            self::XAD => 'Extended Address',
            self::XCN => 'Extended Composite Name And Number For Persons',
            self::XON => 'Extended Composite Name And Number For Organizations',
            self::XPN => 'Extended Person Name',
            self::XTN => 'Extended Telecommunications Number',
            ];
    }
      
}