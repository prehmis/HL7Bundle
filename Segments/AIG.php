<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Segments\RepeatedSegmentTrait;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * AIG segment class
 *
 * AIG: Appointment information - general resource segment
 * The AIG segment contains information about various kinds of resources (other than those with specifically defined
 * segments in this chapter) that can be scheduled. Resources included in a transaction using this segment are assumed
 * to be controlled by a schedule on a schedule filler application. Resources not controlled by a schedule are not
 * identified on a schedule request using this segment. Resources described by this segment are general kinds of
 * resources, such as equipment, that are identified with a simple identification code.

 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.3.1&segment=AIG
 */
class AIG extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{

    use RepeatedSegmentTrait;
    
    const SEGMENT_NAME = 'AIG';
    // 2.3
    const ID = 1;
    const SEGMENT_ACTION_CODE = 2;
    const RESOURCE_ID = 3;
    const RESOURCE_TYPE = 4;
    const RESOURCE_GROUP = 5;
    const RESOURCE_QUANTITY = 6;
    const RESOURCE_QUANTITY_UNITS = 7;
    const START_DATETIME = 8;
    const START_DATETIME_OFFSET = 9;
    const START_DATETIME_OFFSET_UNITS = 10;
    const DURATION = 11;
    const DURATION_UNITS = 12;
    const ALLOW_SUBSTITUTION_CODE = 13;
    const FILLER_STATUS_CODE = 14;

    /**
     * Set the default validation classes used by this segment
     */
    public function setDefaultValidationClasses()
    {
        $this->defaultValidationClasses = [self::SEGMENT_ACTION_CODE => [GenericTable::class, 'T0206']];
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
