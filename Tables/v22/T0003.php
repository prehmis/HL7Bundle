<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0003
 * Event Type
 * HL7 version 2.2
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
    const A25 = 'A25';
    const A26 = 'A26';
    const A27 = 'A27';
    const A28 = 'A28';
    const A29 = 'A29';
    const A30 = 'A30';
    const A31 = 'A31';
    const A32 = 'A32';
    const A33 = 'A33';
    const A34 = 'A34';
    const A35 = 'A35';
    const A36 = 'A36';
    const A37 = 'A37';
    const M01 = 'M01';
    const M02 = 'M02';
    const M03 = 'M03';
    const O01 = 'O01';
    const O02 = 'O02';
    const P01 = 'P01';
    const P02 = 'P02';
    const P03 = 'P03';
    const P04 = 'P04';
    const Q01 = 'Q01';
    const Q02 = 'Q02';
    const Q03 = 'Q03';
    const Q05 = 'Q05';
    const R01 = 'R01';
    const R02 = 'R02';
    const R03 = 'R03';
    const R04 = 'R04';
            
    public static function choices(): array
    {
        return [
            self::A01 => 'Admit a patient',
            self::A02 => 'Transfer a patient',
            self::A03 => 'Discharge a patient',
            self::A04 => 'Register a patient',
            self::A05 => 'Pre-admit a Patient',
            self::A06 => 'Transfer an outpatient to inpatient',
            self::A07 => 'Transfer an inpatient to outpatient',
            self::A08 => 'Update patient information',
            self::A09 => 'Patient departing',
            self::A10 => 'Patient arriving',
            self::A11 => 'Cancel admit',
            self::A12 => 'Cancel transfer',
            self::A13 => 'Cancel discharge',
            self::A14 => 'Pending admit',
            self::A15 => 'Pending transfer',
            self::A16 => 'Pending discharge',
            self::A17 => 'Swap patients',
            self::A18 => 'Merge patient information',
            self::A19 => 'Patient query',
            self::A20 => 'Bed Status Update',
            self::A21 => 'Leave of absence - out (leaving)',
            self::A22 => 'Leave of absence - in (returning)',
            self::A23 => 'Delete a patient record',
            self::A24 => 'Link patient information',
            self::A25 => 'Cancel pending discharge',
            self::A26 => 'Cancel pending transfer',
            self::A27 => 'Cancel pending admit',
            self::A28 => 'Add person information',
            self::A29 => 'Delete person information',
            self::A30 => 'Merge Patient information',
            self::A31 => 'Update person information',
            self::A32 => 'Cancel patient arriving',
            self::A33 => 'Cancel patient departing',
            self::A34 => 'Merge patient information - patient ID only',
            self::A35 => 'Merge patient information - account number only',
            self::A36 => 'Merge patient information - patient ID and account number',
            self::A37 => 'Unlink patient information',
            self::M01 => 'Master file not otherwise specified (for backwards compatibility only)',
            self::M02 => 'Master file - Staff Practioner',
            self::M03 => 'Master file - test / observation',
            self::O01 => 'Order message',
            self::O02 => 'Order response',
            self::P01 => 'Add and Update Patient Accounts',
            self::P02 => 'Purge Patient Accounts',
            self::P03 => 'Post detail financial transaction',
            self::P04 => 'Generate bill and accounts receivable statements',
            self::Q01 => 'Immediate access',
            self::Q02 => 'Deferred access',
            self::Q03 => 'Deferred response to query',
            self::Q05 => 'Unsolicited display update',
            self::R01 => 'Unsolicited transmission of requested observation',
            self::R02 => 'Query for results of observation',
            self::R03 => 'Display-oriented results (query / unsolicited update)',
            self::R04 => 'Response to query / transmission of requested observation',
            ];
    }
      
}