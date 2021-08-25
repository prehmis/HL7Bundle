<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * SCH segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-siu-message
 * http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/SCH
 */
class SCH extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{
    const SEGMENT_NAME = 'SCH';
    
    const PLACER_APPOINTMENT_ID = 1;
    const FILLER_APPOINTMENT_ID = 2;
    const OCCURRENCE_NUMBER = 3;
    const PLACER_GROUP_NUMBER = 4;
    const SCHEDULE_ID = 5;
    const EVENT_REASON = 6;
    const APPOINTMENT_REASON = 7;
    const APPOINTMENT_TYPE = 8;
    const APPOINTMENT_DURATION = 9;
    const APPOINTMENT_DURATION_UNITS = 10;
    const APPOINTMENT_TIMING_QUANTITY = 11;
    const PLACER_CONTACT_PERSON = 12;
    const PLACER_CONTACT_PHONENUMBER = 13;
    const PLACER_CONTACT_ADDRESS = 14;
    const PLACER_CONTACT_LOCATION = 15;
    const FILLER_CONTACT_PERSON = 16;
    const FILLER_CONTACT_PHONENUMBER = 17;
    const FILLER_CONTACT_ADDRESS = 18;
    const FILLER_CONTACT_LOCATION = 19;
    const ENTERED_BY_PERSON = 20;
    const ENTERED_BY_PHONE_NUMBER = 21;
    const ENTERED_BY_LOCATION = 22;
    const PARENT_PLACER_APPOINTMENT_ID = 23;
    const PARENT_FILLER_APPOINTMENT_ID = 24;
    const FILLER_STATUS_CODE = 25;
    const PLACER_ORDER_NUMBER = 26;
    const FILLER_ORDER_NUMBER = 27;
    
    /**
     * Set the default validation classes used by this segment
     */
    public function setDefaultValidationClasses()
    {
        $this->defaultValidationClasses = [self::APPOINTMENT_REASON => [GenericTable::class, 'T0276'],
            self::APPOINTMENT_TYPE => [GenericTable::class, 'T0277'],
            self::FILLER_STATUS_CODE => [GenericTable::class, 'T0278']];
    }
    
    /**
     * Return the maximum amount of fields allowed by the hl7 version
     * 
     * @return int
     */
    public function getMaximumFields(): int
    {
        switch($this->hl7Version) {
            case T0104::RELEASE_2_1:
            case T0104::RELEASE_2_2:
                return 0;
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
                return self::FILLER_STATUS_CODE;
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:    
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:    
                return self::FILLER_ORDER_NUMBER;
        }
    }
}
