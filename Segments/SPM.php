<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * SPM segment class
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5/Segments/SPM
 */
class SPM extends ValidatedRepeatedSegmentAbstract implements ValidatedSegmentInterface
{

    const SEGMENT_NAME = 'SPM';
    const ID = 1;
    const SPECIMEN_ID = 2;
    const SPECIMEN_PARENT_IDS = 3;
    const SPECIMEN_TYPE = 4;
    const SPECIMEN_TYPE_MODIFIER = 5;
    const SPECIMEN_ADDITIVES = 6;
    const SPECIMEN_COLLECTION_METHOD = 7;
    const SPECIMEN_SOURCE_SITE = 8;
    const SPECIMEN_SOURCE_SITE_MODIFIER = 9;
    const SPECIMEN_COLLECTION_SITE = 10;
    const SPECIMEN_ROLE = 11;
    const SPECIMEN_COLLECTION_AMOUNT = 12;
    const GROUPED_SPECIMEN_COUNT = 13;
    const SPECIMEN_DESCRIPTION = 14;
    const SPECIMEN_HANDLING_CODE = 15;
    const SPECIMEN_RISK_CODE = 16;
    const SPECIMEN_COLLECTION_DATETIME = 17;
    const SPECIMEN_RECEIVED_DATETIME = 18;
    const SPECIMEN_EXPIRATION_DATETIME = 19;
    const SPECIMEN_AVAILABILITY = 20;
    const SPECIMEN_REJECT_REASON = 21;
    const SPECIMEN_QUALITY = 22;
    const SPECIMEN_APPROPRIATENESS = 23;
    const SPECIMEN_CONDITION = 24;
    const SPECIMEN_CURRENT_QUANTITY = 25;
    const NUMBER_OF_SPECIMEN_CONTAINERS = 26;
    const CONTAINER_TYPE = 27;
    const CONTAINER_CONDITION = 28;
    const SPECIMEN_CHILD_ROLE = 29;
    const ACCESSION_ID = 30;
    const OTHER_SPECIMEN_ID = 31;
    const SHIPMENT_ID = 32;

    /**
     * Set the default validation classes used by this segment
     */
    public function setDefaultValidationClasses()
    {
        $this->defaultValidationClasses = [self::SPECIMEN_CHILD_ROLE => [GenericTable::class, 'T0494'],
            self::SPECIMEN_CONDITION => [GenericTable::class, 'T0493'],
            self::SPECIMEN_APPROPRIATENESS => [GenericTable::class, 'T0492'],
            self::SPECIMEN_QUALITY => [GenericTable::class, 'T0491'],
            self::SPECIMEN_REJECT_REASON => [GenericTable::class, 'T0490'],
            self::SPECIMEN_AVAILABILITY => [GenericTable::class, 'T0136'],
            self::SPECIMEN_RISK_CODE => [GenericTable::class, 'T0489'],
            self::SPECIMEN_HANDLING_CODE => [GenericTable::class, 'T0376'],
            self::SPECIMEN_ROLE => [GenericTable::class, 'T0369'],
            self::SPECIMEN_COLLECTION_METHOD => [GenericTable::class, 'T0488'],
            self::SPECIMEN_ADDITIVES => [GenericTable::class, 'T0371'],
            self::SPECIMEN_TYPE => [GenericTable::class, 'T0487'],
        ];
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
                return 0;
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
                return self::SPECIMEN_CHILD_ROLE;
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::SHIPMENT_ID;
        }
    }

}
