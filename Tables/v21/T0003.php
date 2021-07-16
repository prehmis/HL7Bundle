<?php
    
namespace Prehmis\HL7Bundle\Tables\v21;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0003
 * Event Type
 * HL7 version 2.1
 *
 */
final class T0003 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A01 = 'A01';
    const A02 = 'A02';
    const A03 = 'A03';
    const A04 = 'A04';
    const A05 = 'A05';
    const A06 = 'A06';
    const A07 = 'A07';
    const A08 = 'A08';
    const A09 = 'A09';
    const A10 = 'A10';
    const A11 = 'A11';
    const A12 = 'A12';
    const A13 = 'A13';
    const A14 = 'A14';
    const A15 = 'A15';
    const A16 = 'A16';
    const A17 = 'A17';
    const A18 = 'A18';
    const A19 = 'A19';
    const A20 = 'A20';
    const A21 = 'A21';
    const A22 = 'A22';
    const A23 = 'A23';
    const A24 = 'A24';
    const O01 = 'O01';
    const O02 = 'O02';
    const P01 = 'P01';
    const P02 = 'P02';
    const P03 = 'P03';
    const P04 = 'P04';
    const Q01 = 'Q01';
    const Q02 = 'Q02';
    const R01 = 'R01';
    const R03 = 'R03';
            
    public static function choices(): array
    {
        return [
            self::A01 => 'Admit a patient',
            self::A02 => 'Transfer a Patient',
            self::A03 => 'Discharge a Patient',
            self::A04 => 'Register a Patient',
            self::A05 => 'Pre-admit a Patient',
            self::A06 => 'Transfer an outpatient to inpatient',
            self::A07 => 'Transfer an Inpatient to Outpatient',
            self::A08 => 'Update patient information',
            self::A09 => 'Patient departing',
            self::A10 => 'Patient arriving',
            self::A11 => 'Cancel admit',
            self::A12 => 'Cancel transfer',
            self::A13 => 'Cancel discharge',
            self::A14 => 'Pending admit',
            self::A15 => 'Pending transfer',
            self::A16 => 'Pending discharge',
            self::A17 => 'Swap Patients',
            self::A18 => 'Merge patient information',
            self::A19 => 'Patient query',
            self::A20 => 'Bed status updates',
            self::A21 => 'Leave of Absence - Out (leaving)',
            self::A22 => 'Leave of Absence - In (returning)',
            self::A23 => 'Delete a Patient Record',
            self::A24 => 'Link Patient Records',
            self::O01 => 'Order message',
            self::O02 => 'Order response',
            self::P01 => 'Add and update patient account',
            self::P02 => 'Purge Patient Accounts',
            self::P03 => 'Post detail financial transaction',
            self::P04 => 'Generate bills and A/R statements',
            self::Q01 => 'Immediate access',
            self::Q02 => 'Deferred Access',
            self::R01 => 'Unsolicited transmission of requested Observ.',
            self::R03 => 'Display oriented results, query/unsol. update',
            ];
    }
      
}