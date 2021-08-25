<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Segments\RepeatedSegmentTrait;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;


/**
 * PID segment class
 * Reference: https://corepointhealth.com/resource-center/hl7-resources/hl7-pid-segment
 */
class PID extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{
    
    use RepeatedSegmentTrait;
    
    const SEGMENT_NAME = 'PID';
    
    // hl7 v2.1
    const ID = 1;
    const PATIENT_ID = 2;
    const PATIENT_IDENTIFIER_LIST = 3;
    const ALTERNATE_PATIENT_ID = 4;
    const PATIENT_NAME = 5;
    const MOTHERS_MAIDEN_NAME = 6;
    const DATETIME_OF_BIRTH = 7;
    const SEX = 8;
    const PATIENT_ALIAS = 9;
    const RACE = 10;
    const PATIENT_ADDRESS = 11;
    const COUNTRY_CODE = 12;
    const PHONE_NUMBER_HOME = 13;
    const PHONE_NUMBER_BUSINESS = 14;
    const PRIMARY_LANGUAGE = 15;
    const MARITAL_STATUS = 16;
    const RELIGION = 17;
    const PATIENT_ACCOUNT_NUMBER = 18;
    const SSN_NUMBER = 19;
    const DRIVERS_LICENSE_NUMBER = 20;
    // hl7 v2.2
    const MOTHERS_IDENTIFIER = 21;
    const ETHNIC_GROUP = 22;
    const BIRTH_PLACE = 23;
    const MULTIPLE_BIRTH_INDICATOR = 24;
    const BIRTH_ORDER = 25;
    const CITIZENSHIP = 26;
    const VETERANS_MILITARY_STATUS = 27;
    // hl7 v2.3
    const NATIONALITY = 28;
    const PATIENT_DEATH_DATETIME = 29;
    const PATIENT_DEATH_INDICATOR = 30;
    // hl7 2.4
    const IDENTITY_UNKNOWN_INDICATOR = 31;
    const IDENTITY_RELIABILITY_CODE = 32;
    const LAST_UPDATE_DATETIME = 33;
    const LAST_UPDATE_FACILITY = 34;
    const SPECIES_CODE = 35;
    const BREED_CODE = 36;
    const STRAIN = 37;
    const PRODUCTION_CLASS_CODE = 38;
    // hl7 2.5
    const TRIBAL_CITIZENSHIP = 39;
    // hl7 2.7
    const PATIENT_TELECOMMUNICATION_INFORMATION = 40;
    
    /**
     * Set the default validation classes used by this segment
     */
    public function setDefaultValidationClasses() {
        $this->defaultValidationClasses = [
            self::SEX => [GenericTable::class, 'T0001'],
            self::RACE => [GenericTable::class, 'T0005'],
            self::MARITAL_STATUS => [GenericTable::class, 'T0002'],
            self::MULTIPLE_BIRTH_INDICATOR => [GenericTable::class, 'T0136'],
            self::PATIENT_DEATH_INDICATOR => [GenericTable::class, 'T0136'],
            self::IDENTITY_UNKNOWN_INDICATOR => [GenericTable::class, 'T0136'],
        ];
    }

    /**
     * Return the maximum amount of fields allowed by the hl7 version
     * 
     * @return int
     */
    public function getMaximumFields(): int
    {
        switch($this->hl7Version) {
            case T0104::RELEASE_2_1:
                return self::DRIVERS_LICENSE_NUMBER;
            case T0104::RELEASE_2_2:
                return self::VETERANS_MILITARY_STATUS;
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
                return self::PATIENT_DEATH_INDICATOR;
            case T0104::RELEASE_2_4:
                return self::PRODUCTION_CLASS_CODE;
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
                return self::TRIBAL_CITIZENSHIP;
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:    
                return self::PATIENT_TELECOMMUNICATION_INFORMATION;
        }
    }
    
}
