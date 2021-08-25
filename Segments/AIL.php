<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Segments\RepeatedSegmentTrait;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * AIL segment class
 *
 * AIL: Appointment Information - Location Resource
 *
 * The AIL segment contains information about location resources (meeting rooms, operating rooms, examination rooms, or
 * other locations) that can be scheduled. Resources included in a transaction using this segment are assumed to be
 * controlled by a schedule on a schedule filler application. Resources not controlled by a schedule are not identified
 * on a schedule request using this segment. Location resources are identified with this specific segment because of the
 * specific encoding of locations used by the HL7 specification.

 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=AIL
 */
class AIL extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{

    use RepeatedSegmentTrait;
    
    const SEGMENT_NAME = 'AIL';
    // v2.3
    const ID = 1;
    const SEGMENT_ACTION_CODE = 2;
    const LOCATION_ID = 3;
    const LOCATION_TYPE = 4;
    const LOCATION_GROUP = 5;
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
    public function setDefaultValidationClasses(): array
    {
        return [self::SEGMENT_ACTION_CODE => [GenericTable::class, 'T0206'],
            self::LOCATION_TYPE => [GenericTable::class, 'T0305']];
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
