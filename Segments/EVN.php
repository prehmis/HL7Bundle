<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * EVN segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/EVN
 *      https://corepointhealth.com/resource-center/hl7-resources/hl7-evn-event-type-segment
 */
class EVN extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{

    const SEGMENT_NAME = 'EVN';
    // 2.1
    const EVENT_TYPE_CODE = 1;
    const RECORDED_DATETIME = 2;
    const DATETIME_PLANNED_EVENT = 3;
    const EVENT_REASON_CODE = 4;
    // 2.2
    const OPERATOR_ID = 5;
    // 2.3
    const EVENT_OCCURRED = 6;
    // 2.4
    const EVENT_FACILITY = 7;

    /**
     * Return the maximum amount of fields allowed by the hl7 version
     * 
     * @return int
     */
    public function getMaximumFields(): int
    {
        switch ($this->hl7Version) {
            case T0104::RELEASE_2_1:
                return self::EVENT_REASON_CODE;
            case T0104::RELEASE_2_2:
                return self::OPERATOR_ID;
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
                return self::EVENT_OCCURRED;
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::EVENT_FACILITY;
        }
    }

}
