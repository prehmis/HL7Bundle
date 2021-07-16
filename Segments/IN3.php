<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\T0136;

/**
 * IN3 segment class
 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=ORC
 */
class IN3 extends ValidatedRepeatedSegmentAbstract
{

    const SEGMENT_NAME = 'IN3';
    const ID = 1;
    const CERTIFICATION_NUMBER = 2;
    const CERTIFIED_BY = 3;
    const CERTIFICATION_REQUIRED = 4;
    const PENALTY = 5;
    const CERTIFICATION_DATE_TIME = 6;
    const CERTIFICATION_MODIFY_DATE_TIME = 7;
    const OPERATOR = 8;
    const CERTIFICATION_BEGIN_DATE = 9;
    const CERTIFICATION_END_DATE = 10;
    const DAYS = 11;
    const NON_CONCUR_CODE_DESCRIPTION = 12;
    const NON_CONCUR_EFFECTIVE_DATE_TIME = 13;
    const PHYSICIAN_REVIEWER = 14;
    const CERTIFICATION_CONTACT = 15;
    const CERTIFICATION_CONTACT_PHONE_NUMBER = 16;
    const APPEAL_REASON = 17;
    const CERTIFICATION_AGENCY = 18;
    const CERTIFICATION_AGENCY_PHONE_NUMBER = 19;
    const PRE_CERTIFICATION_REQUIREMENT = 20;
    const CASE_MANAGER = 21;
    const SECOND_OPINION_DATE = 22;
    const SECOND_OPINION_STATUS = 23;
    const SECOND_OPINION_DOCUMENTATION_RECEIVED = 24;
    const SECOND_OPINION_PHYSICIAN = 25;
    const CERTIFICATION_TYPE = 26;
    const CERTIFICATION_CATEGORY = 27;

    /**
     * Return the default validation classes used by this segment
     * 
     * @return array
     */
    public function getDefaultValidationClasses(): array
    {
        return [self::CERTIFICATION_REQUIRED => T0136::class];
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
                return 0;
            case T0104::RELEASE_2_2:
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
                return self::SECOND_OPINION_PHYSICIAN;
            case T0104::RELEASE_2_8:    
            default:
                return self::CERTIFICATION_CATEGORY;
        }
    }

}
