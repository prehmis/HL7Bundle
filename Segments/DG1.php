<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * DG1 segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/DG1
 */
class DG1 extends ValidatedRepeatedSegmentAbstract
{

    const SEGMENT_NAME = 'DG1';
    // v2.1
    const ID = 1;
    const DIAGNOSIS_CODING_METHOD = 2;
    const DIAGNOSIS_CODE_DG1 = 3;
    const DIAGNOSIS_DESCRIPTION = 4;
    const DIAGNOSIS_DATETIME = 5;
    const DIAGNOSIS_TYPE = 6;
    const MAJOR_DIAGNOSTIC_CATEGORY = 7;
    const DIAGNOSTIC_RELATED_GROUP = 8;
    const DRG_APPROVAL_INDICATOR = 9;
    const DRG_GROUPER_REVIEW_CODE = 10;
    const OUTLIER_TYPE = 11;
    const OUTLIER_DAYS = 12;
    const OUTLIER_COST = 13;
    const GROUPER_VERSION_AND_TYPE = 14;
    // v2.2
    const DIAGNOSIS_PRIORITY = 15;
    const DIAGNOSING_CLINICIAN = 16;
    // v2.3
    const DIAGNOSIS_CLASSIFICATION = 17;
    const CONFIDENTIAL_INDICATOR = 18;
    const ATTESTATION_DATETIME = 19;
    // v2.5
    const DIAGNOSIS_IDENTIFIER = 20;
    const DIAGNOSIS_ACTION_CODE = 21;
    // v2.6
    const PARENT_DIAGNOSIS = 22;
    const DRG_CCL_VALUE_CODE = 23;
    const DRG_GROUPING_USAGE = 24;
    const DRG_DIAGNOSIS_DETERMINATION_STATUS = 25;
    const PRESENT_ON_ADMISSION_POA_INDICATOR = 26;

    /**
     * Return the default validation classes used by this segment
     * 
     * @return array
     */
    public function getDefaultValidationClasses(): array
    {
        return [];
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
                return self::GROUPER_VERSION_AND_TYPE;
            case T0104::RELEASE_2_2:
                return self::DIAGNOSING_CLINICIAN;
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
            case T0104::RELEASE_2_4:
                return self::ATTESTATION_DATETIME;
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
                return self::DIAGNOSIS_ACTION_CODE;
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::PRESENT_ON_ADMISSION_POA_INDICATOR;
        }
    }

}
