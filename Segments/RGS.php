<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Segments\RepeatedSegmentTrait;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * RGS segment class
 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=RGS
 */
class RGS extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{

    use RepeatedSegmentTrait;

    const SEGMENT_NAME = 'RGS';
    // 2.3
    const ID = 1;
    const SEGMENT_ACTION_CODE = 2;
    const RESOURCE_GROUP_ID = 3;

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
                return self::RESOURCE_GROUP_ID;
        }
    }

}
