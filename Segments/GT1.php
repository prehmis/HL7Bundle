<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * Description of GT1
 *
 * @author MBERTELER
 */
class GT1 extends ValidatedRepeatedSegmentAbstract implements ValidatedSegmentInterface
{

    const SEGMENT_NAME = 'GT1';
    // v2.1
    const ID = 1;
    const GUARANTOR_NUMBER = 2;
    const GUARANTOR_NAME = 3;
    const GUARANTOR_SPOUSE_NAME = 4;
    const GUARANTOR_ADDRESS = 5;
    const GUARANTOR_PHONE_NUMBER_HOME = 6;
    const GUARANTOR_PHONE_NUMBER_BUSINESS = 7;
    const GUARANTOR_DATETIME_OF_BIRTH = 8;
    const GUARANTOR_ADMINISTRATIVE_SEX = 9;
    const GUARANTOR_TYPE = 10;
    const GUARANTOR_RELATIONSHIP = 11;
    const GUARANTOR_SSN = 12;
    const GUARANTOR_DATE_BEGIN = 13;
    const GUARANTOR_DATE_END = 14;
    const GUARANTOR_PRIORITY = 15;
    const GUARANTOR_EMPLOYER_NAME = 16;
    const GUARANTOR_EMPLOYER_ADDRESS = 17;
    const GUARANTOR_EMPLOYER_PHONE_NUMBER = 18;
    const GUARANTOR_EMPLOYEE_ID_NUMBER = 19;
    const GUARANTOR_EMPLOYMENT_STATUS = 20;
    // v 2.2
    const GUARANTOR_ORGANIZATION_NAME = 21;
    // HL7 v2.3
    const GUARANTOR_BILLING_HOLD_FLAG = 22;
    const GUARANTOR_CREDIT_RATING_CODE = 23;
    const GUARANTOR_DEATH_DATETIME = 24;
    const GUARANTOR_DEATH_FLAG = 25;
    const GUARANTOR_CHARGE_ADJUSTMENT_CODE = 26;
    const GUARANTOR_HOUSEHOLD_ANNUAL_INCOME = 27;
    const GUARANTOR_HOUSEHOLD_SIZE = 28;
    const GUARANTOR_EMPLOYER_ID_NUMBER = 29;
    const GUARANTOR_MARITAL_STATUS_CODE = 30;
    const GUARANTOR_HIRE_EFFECTIVE_DATE = 31;
    const EMPLOYMENT_STOP_DATE = 32;
    const LIVING_DEPENDENCY = 33;
    const AMBULATORY_STATUS = 34;
    const CITIZENSHIP = 35;
    const PRIMARY_LANGUAGE = 36;
    const LIVING_ARRANGEMENT = 37;
    const PUBLICITY_CODE = 38;
    const PROTECTION_INDICATOR = 39;
    const STUDENT_INDICATOR = 40;
    const RELIGION = 41;
    const MOTHERS_MAIDEN_NAME = 42;
    const NATIONALITY = 43;
    const ETHNIC_GROUP = 44;
    const CONTACT_PERSONS_NAME = 45;
    const CONTACT_PERSONS_TELEPHONE_NUMBER = 46;
    const CONTACT_REASON = 47;
    const CONTACT_RELATIONSHIP = 48;
    const JOB_TITLE = 49;
    const JOB_CODE_CLASS = 50;
    const GUARANTOR_EMPLOYERS_ORGANIZATION_NAME = 51;
    const HANDICAP = 52;
    const JOB_STATUS = 53;
    const GUARANTOR_FINANCIAL_CLASS = 54;
    const GUARANTOR_RACE = 55;
    // HL7 v2.5
    const GUARANTOR_BIRTH_PLACE = 56;
    const VIP_INDICATOR = 57;
    
    /**
     * Return the maximum amount of fields allowed by the hl7 version
     * 
     * @return int
     */
    public function getMaximumFields(): int
    {
        switch ($this->hl7Version) {
            case T0104::RELEASE_2_1:
                return self::GUARANTOR_EMPLOYMENT_STATUS;
            case T0104::RELEASE_2_2:
                return self::GUARANTOR_ORGANIZATION_NAME;
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
            case T0104::RELEASE_2_4:
                return self::GUARANTOR_RACE;
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::VIP_INDICATOR;
        }
    }

}
