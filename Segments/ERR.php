<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * Description of ERR
 *
 * @author MBERTELER
 */
class ERR extends ValidatedSegmentAbstract
{

    const SEGMENT_NAME = 'ERR';
    // hl7 v2.1
    const ERROR_CODE = 1;
    // v2.5
    const ERROR_LOCATION = 2;
    const HL7_ERROR_CODE = 3;
    const SEVERITY = 4;
    const APP_ERROR_CODE = 5;
    const APP_ERROR_PARAM = 6;
    const DIAGNOSTIC_INFO = 7;
    const USER_MESSAGE = 8;
    const INFORM_PERSON_INDICATOR = 9;
    const OVERRIDE_TYPE = 10;
    const OVERRIDE_REASON_CODE = 11;
    const HELP_DESK_CONSTACT_PERSON = 12;

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
            case T0104::RELEASE_2_2:
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
            case T0104::RELEASE_2_4:
                return self::ERROR_CODE;
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::HELP_DESK_CONSTACT_PERSON;
        }
    }

}
