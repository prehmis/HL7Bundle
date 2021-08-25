<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * PV1 segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-pv1-patient-visit-information-segment
 */
class PV1 extends ValidatedRepeatedSegmentAbstract implements ValidatedSegmentInterface
{

    const SEGMENT_NAME = 'PV1';
    //hl7 2.1
    const ID = 1;
    const PATIENT_CLASS = 2;
    const ASSIGNED_PATIENT_LOCATION = 3;
    const ADMISSION_TYPE = 4;
    const PREADMIT_NUMBER = 5;
    const PRIOR_PATIENT_LOCATION = 6;
    const ATTENDING_DOCTOR = 7;
    const REFERRING_DOCTOR = 8;
    const CONSULTING_DOCTOR = 9;
    const HOSPITAL_SERVICE = 10;
    const TEMPORARY_LOCATION = 11;
    const PREADMIT_TEST_INDICATOR = 12;
    const RE_ADMISSION_INDICATOR = 13;
    const ADMIT_SOURCE = 14;
    const AMBULATORY_STATUS = 15;
    const VIP_INDICATOR = 16;
    const ADMITTING_DOCTOR = 17;
    const PATIENT_TYPE = 18;
    const VISIT_NUMBER = 19;
    const FINANCIAL_CLASS = 20;
    const CHARGE_PRICE_INDICATOR = 21;
    const COURTESY_CODE = 22;
    const CREDIT_RATING = 23;
    const CONTRACT_CODE = 24;
    const CONTRACT_EFFECTIVE_DATE = 25;
    const CONTRACT_AMOUNT = 26;
    const CONTRACT_PERIOD = 27;
    const INTEREST_CODE = 28;
    const TRANSFER_TO_BAD_DEBT_CODE = 29;
    const TRANSFER_TO_BAD_DEBT_DATE = 30;
    const BAD_DEBT_AGENCY_CODE = 31;
    const BAD_DEBT_TRANSFER_AMOUNT = 32;
    const BAD_DEBT_RECOVERY_AMOUNT = 33;
    const DELETE_ACCOUNT_INDICATOR = 34;
    const DELETE_ACCOUNT_DATE = 35;
    const DISCHARGE_DISPOSITION = 36;
    const DISCHARGED_TO_LOCATION = 37;
    const DIET_TYPE = 38;
    const SERVICING_FACILITY = 39;
    const BED_STATUS = 40;
    const ACCOUNT_STATUS = 41;
    const PENDING_LOCATION = 42;
    const PRIOR_TEMPORARY_LOCATION = 43;
    const ADMIT_DATETIME = 44;
    const DISCHARGE_DATETIME = 45;
    const CURRENT_PATIENT_BALANCE = 46;
    const TOTAL_CHARGES = 47;
    const TOTAL_ADJUSTMENTS = 48;
    const TOTAL_PAYMENTS = 49;
    // hl7 v2.2
    const ALTERNATE_VISIT_ID = 50;
    // hl7 v2.3
    const VISIT_INDICATOR = 51;
    const OTHER_HEALTHCARE_PROVIDER = 52;
    // hl7 v2.7
    const SERVICE_EPISODE_DESCRIPTION = 53;
    const SERVICE_EPISODE_IDENTIFIER = 54;

    /**
     * Set the default validation classes used by this segment
     */
    public function setDefaultValidationClasses()
    {
        $this->defaultValidationClasses = [self::PATIENT_CLASS => [GenericTable::class, 'T0004'],
            self::ADMISSION_TYPE => [GenericTable::class, 'T0007'],
            self::AMBULATORY_STATUS => [GenericTable::class, 'T0009'],
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
                return self::TOTAL_PAYMENTS;
            case T0104::RELEASE_2_2:
                return self::ALTERNATE_VISIT_ID;
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
                return self::OTHER_HEALTHCARE_PROVIDER;
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::SERVICE_EPISODE_IDENTIFIER;
        }
    }

}
