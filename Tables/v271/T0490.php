<?php
    
namespace Prehmis\HL7Bundle\Tables\v271;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0490
 * Specimen Reject Reason
 * HL7 version 2.7.1
 *
 */
final class T0490 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const EXPIRED = 'EX';
    const QUANTITY_NOT_SUFFICIENT = 'QS';
    const MISSING_PATIENT_ID_NUMBER = 'RA';
    const BROKEN_CONTAINER = 'RB';
    const CLOTTING = 'RC';
    const MISSING_COLLECTION_DATE = 'RD';
    const MISSING_PATIENT_NAME = 'RE';
    const HEMOLYSIS = 'RH';
    const IDENTIFICATION_PROBLEM = 'RI';
    const LABELING = 'RM';
    const CONTAMINATION = 'RN';
    const MISSING_PHLEBOTOMIST_ID = 'RP';
    const IMPROPER_STORAGE = 'RR';
    const NAME_MISSPELLING = 'RS';
            
    public static function choices(): array
    {
        return [
            self::EXPIRED => 'Expired',
            self::QUANTITY_NOT_SUFFICIENT => 'Quantity not sufficient',
            self::MISSING_PATIENT_ID_NUMBER => 'Missing patient ID number',
            self::BROKEN_CONTAINER => 'Broken container',
            self::CLOTTING => 'Clotting',
            self::MISSING_COLLECTION_DATE => 'Missing collection date',
            self::MISSING_PATIENT_NAME => 'Missing patient name',
            self::HEMOLYSIS => 'Hemolysis',
            self::IDENTIFICATION_PROBLEM => 'Identification problem',
            self::LABELING => 'Labeling',
            self::CONTAMINATION => 'Contamination',
            self::MISSING_PHLEBOTOMIST_ID => 'Missing phlebotomist ID',
            self::IMPROPER_STORAGE => 'Improper storage',
            self::NAME_MISSPELLING => 'Name misspelling',
            ];
    }
      
}