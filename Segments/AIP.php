<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\T0206;

/**
 * AIP segment class
 *
 * AIP: Appointment Information - Personnel Resource
 * The AIP segment contains information about the personnel types that can be scheduled. Personnel included in a
 * transaction using this segment are assumed to be controlled by a schedule on a schedule filler application.
 * Personnel not controlled by a schedule are not identified on a schedule request using this segment. The kinds of
 * personnel described on this segment include any healthcare provider in the institution controlled by a schedule (for
 * example: technicians, physicians, nurses, surgeons, anesthesiologists, or CRNAs).


 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=AIP
 */
class AIP extends ValidatedRepeatedSegmentAbstract
{

    const SEGMENT_NAME = 'AIP';
    // v2.3
    const ID = 1;
    const SEGMENT_ACTION_CODE = 2;
    const PERSONNEL_RESOURCE_ID = 3;
    const RESOURCE_ROLE = 4;
    const RESOURCE_GROUP = 5;
    const START_DATETIME = 6;
    const START_DATETIME_OFFSET = 7;
    const START_DATETIME_OFFSET_UNITS = 8;
    const DURATION = 9;
    const DURATION_UNITS = 10;
    const ALLOW_SUBSTITUTION_CODE = 11;
    const FILLER_STATUS_CODE = 12;

    /**
     * Return the default validation classes used by this segment
     * 
     * @return array
     */
    public function getDefaultValidationClasses(): array
    {
        return [self::SEGMENT_ACTION_CODE => T0206::class];
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
                return 0;
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
                return self::FILLER_STATUS_CODE;
        }
    }

}
