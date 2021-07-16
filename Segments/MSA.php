<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\T0008;
use Prehmis\HL7Bundle\Tables\T0357;

/**
 * MSA: Message acknowledgement segment
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3/segment/MSA
 */
class MSA extends ValidatedSegmentAbstract
{

    const SEGMENT_NAME = 'MSA';
    // 2.1
    const ACKNOWLEDGEMENT_CODE = 1;
    const MESSAGE_CONTROL_ID = 2;
    const TEXT_MESSAGE = 3;
    const EXPECTED_SEQUENCE_NUMBER = 4;
    const DELAYED_ACKNOWLEDGEMENT_TYPE = 5;
    // 2.2
    const ERROR_CONDITION = 6;
    // 2.6
    const MESSAGE_WAITING_NUMBER = 7;
    const MESSAGE_WAITING_PRIORITY = 8;

    /**
     * Return the default validation classes used by this segment
     * 
     * @return array
     */
    public function getDefaultValidationClasses(): array
    {
        return [self::ACKNOWLEDGEMENT_CODE => T0008::class,
            self::ERROR_CONDITION => T0357::class];
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
                return self::DELAYED_ACKNOWLEDGEMENT_TYPE;
            case T0104::RELEASE_2_2:
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
                return self::ERROR_CONDITION;
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::MESSAGE_WAITING_PRIORITY;
        }
    }

}
