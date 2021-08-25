<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * NTE segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-nte-notes-comments
 */
class NTE extends ValidatedRepeatedSegmentAbstract implements ValidatedSegmentInterface
{

    const SEGMENT_NAME = 'NTE';
    const ID = 1;
    const SOURCE_OF_COMMENT = 2;
    const COMMENT = 3;
    // 2.3.1
    const COMMENT_TYPE = 4;
    // 2.6
    const ENTERED_BY = 5;
    const ENTERED_DATETIME = 6;
    const EFFECTIVE_START_DATE = 7;
    const EXPIRATION_DATE = 8;

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
                return self::COMMENT;
            case T0104::RELEASE_2_3_1:
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
                return self::COMMENT_TYPE;
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            default:
                return self::EXPIRATION_DATE;
        }
    }

}
