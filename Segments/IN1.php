<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Segments\RepeatedSegmentTrait;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * IN1 segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-in1-insurance-segment
 */
class IN1 extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{
    use RepeatedSegmentTrait;

    const SEGMENT_NAME = 'IN1';
    // v2.1
    const ID = 1;
    const INSURANCE_PLAN_ID = 2;
    const INSURANCE_COMPANY_ID = 3;
    const INSURANCE_COMPANY_NAME = 4;
    const INSURANCE_COMPANY_ADDRESS = 5;
    const INSURANCE_CO_CONTACT_PERSON = 6;
    const INSURANCE_CO_PHONE_NUMBER = 7;
    const GROUP_NUMBER = 8;
    const GROUP_NAME = 9;
    const INSURED_GROUP_EMP_ID = 10;
    const INSURED_GROUP_EMP_NAME = 11;
    const PLAN_EFFECTIVE_DATE = 12;
    const PLAN_EXPIRATION_DATE = 13;
    const AUTHORIZATION_INFORMATION = 14;
    const PLAN_TYPE = 15;
    const NAME_OF_INSURED = 16;
    const INSURED_RELATIONSHIP_TO_PATIENT = 17;
    const INSURED_DATE_OF_BIRTH = 18;
    const INSURED_ADDRESS = 19;
    const ASSIGNMENT_OF_BENEFITS = 20;
    const COORDINATION_OF_BENEFITS = 21;
    const COORD_OF_BEN_PRIORITY = 22;
    const NOTICE_OF_ADMISSION_FLAG = 23;
    const NOTICE_OF_ADMISSION_DATE = 24;
    const REPORT_OF_ELIGIBILITY_FLAG = 25;
    const REPORT_OF_ELIGIBILITY_DATE = 26;
    const RELEASE_INFORMATION_CODE = 27;
    const PRE_ADMIT_CERT = 28;
    const VERIFICATION_DATETIME = 29;
    const VERIFICATION_BY = 30;
    const TYPE_OF_AGREEMENT_CODE = 31;
    const BILLING_STATUS = 32;
    const LIFETIME_RESERVE_DAYS = 33;
    const DELAY_BEFORE_LR_DAY = 34;
    const COMPANY_PLAN_CODE = 35;
    const POLICY_NUMBER = 36;
    const POLICY_DEDUCTIBLE = 37;
    const POLICY_LIMIT_AMOUNT = 38;
    const POLICY_LIMIT_DAYS = 39;
    const ROOM_RATE_SEMI_PRIVATE = 40;
    const ROOM_RATE_PRIVATE = 41;
    const INSURED_EMPLOYMENT_STATUS = 42;
    const INSURED_ADMINISTRATIVE_SEX = 43;
    const INSURED_EMPLOYER_ADDRESS = 44;
    // 2.2
    const VERIFICATION_STATUS = 45;
    const PRIOR_INSURANCE_PLAN_ID = 46;
    // HL7 v2.3
    const COVERAGE_TYPE = 47;
    const HANDICAP = 48;
    const INSURED_ID_NUMBER = 49;
    // HL7 v2.5
    const SIGNATURE_CODE = 50;
    const SIGNATURE_CODE_DATE = 51;
    const INSURED_BIRTH_PLACE = 52;
    const VIP_INDICATOR = 53;
    // 2.7
    const EXTERNAL_HEALTH_PLAN_IDENTIFIERS = 54;
    // 2.8
    const INSURANCE_ACTION_CODE = 55;

    /**
     * Set the default validation classes used by this segment
     */
    public function setDefaultValidationClasses()
    {
        $this->defaultValidationClasses = [self::INSURED_RELATIONSHIP_TO_PATIENT => [GenericTable::class, 'T0063'],
            self::NOTICE_OF_ADMISSION_FLAG => [GenericTable::class, 'T0136'],
            self::REPORT_OF_ELIGIBILITY_FLAG => [GenericTable::class, 'T0136'],
            self::INSURED_ADMINISTRATIVE_SEX => [GenericTable::class, 'T0001'],
        ];
    }

    /**
     * Return the maximum amount of fields allowed by the hl7 version
     * 
     * @return int
     */
    public function getMaximumFields(): int
    {
        switch ($this->hl7Version) {
            case T0104::RELEASE_2_1:
                return self::INSURED_EMPLOYER_ADDRESS;
            case T0104::RELEASE_2_2:
                return self::PRIOR_INSURANCE_PLAN_ID;
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
            case T0104::RELEASE_2_4:
                return self::INSURED_ID_NUMBER;
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
                return self::VIP_INDICATOR;
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
                return self::EXTERNAL_HEALTH_PLAN_IDENTIFIERS;
            case T0104::RELEASE_2_8:
            default:
                return self::INSURANCE_ACTION_CODE;
        }
    }

}
