<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Segments\RepeatedSegmentTrait;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * TQ1 segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.5.1/dataType/Default.aspx?version=HL7+v2.5.1&dataType=TQ1
 */
class TQ1 extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{

    use RepeatedSegmentTrait;

    const SEGMENT_NAME = 'TQ1';
    // v2.5
    const ID = 1;
    const QUANTITY = 2;
    const REPEAT_PATTERN = 3;
    const EXPLICIT_TIME = 4;
    const RELATIVE_TIME_AND_UNITS = 5;
    const SERVICE_DURATION = 6;
    const START_DATETIME = 7;
    const END_DATETIME = 8;
    const PRIORITY = 9;
    const CONDITION_TEXT = 10;
    const TEXT_INSTRUCTION = 11;
    const CONJUNCTION = 12;
    const OCCURRENCE_DURATION = 13;
    const TOTAL_OCCURRENCES = 14;

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
                return 0;
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::TOTAL_OCCURRENCES;
        }
    }

}
