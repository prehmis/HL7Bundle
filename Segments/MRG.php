<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * MRG segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/MRG
 */
class MRG extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{

    const SEGMENT_NAME = 'MRG';
    // v2.1
    const PRIOR_PATIENT_IDENTIFIER_LIST = 1;
    const PRIOR_ALTERNATE_PATIENT_ID = 2;
    const PRIOR_PATIENT_ACCOUNT_NUMBER = 3;
    // v2.2
    const PRIOR_PATIENT_ID = 4;
    // v2.3
    const PRIOR_VISIT_NUMBER = 5;
    const PRIOR_ALTERNATE_VISIT_ID = 6;
    const PRIOR_PATIENT_NAME = 7;

    /**
     * Return the maximum amount of fields allowed by the hl7 version
     * 
     * @return int
     */
    public function getMaximumFields(): int
    {
        switch ($this->hl7Version) {
            case T0104::RELEASE_2_1:
                return self::PRIOR_PATIENT_ACCOUNT_NUMBER;
            case T0104::RELEASE_2_2:
                return self::PRIOR_PATIENT_ID;
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::PRIOR_PATIENT_NAME;
        }
    }

}
