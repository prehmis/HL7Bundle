<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Segments\RepeatedSegmentTrait;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * EQU segment class
 * Ref: https://www.interfaceware.com/hl7-standard/hl7-segment-EQU.html
 */
class EQU extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{

    use RepeatedSegmentTrait;
    
    const SEGMENT_NAME = 'EQU';
    // 2.4
    const ID = 1;
    const EVENT_DATETIME = 2;
    const EQUIPMENT_STATE = 3;
    const LOCAL_REMOTE_CONTROL_STATE = 4;
    const ALERT_LEVEL = 5;

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
                return 0;
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::ALERT_LEVEL;
        }
    }

}
