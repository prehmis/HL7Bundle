<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * ORC segment class
 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7%20v2.5.1&segment=ORC
 */
class ORC extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{

    const SEGMENT_NAME = 'ORC';
    const ORDER_CONTROL = 1;
    const PLACER_ORDER_NUMBER = 2;
    const FILLER_ORDER_NUMBER = 3;
    const PLACER_GROUP_NUMBER = 4;
    const ORDER_STATUS = 5;
    const RESPONSE_FLAG = 6;
    const QUANTITY_TIMING = 7;
    const PARENT = 8;
    const DATETIME_OF_TRANSACTION = 9;
    const ENTERED_BY = 10;
    const VERIFIED_BY = 11;
    const ORDERING_PROVIDER = 12;
    const ENTERERS_LOCATION = 13;
    const CALL_BACK_PHONE_NUMBER = 14;
    // v 2.2
    const ORDER_EFFECTIVE_DATETIME = 15;
    const ORDER_CONTROL_CODE_REASON = 16;
    const ENTERING_ORGANIZATION = 17;
    const ENTERING_DEVICE = 18;
    const ACTION_BY = 19;
    // HL7 v2.3.1
    const ADVANCED_BENEFICIARY_NOTICE_CODE = 20;
    const ORDERING_FACILITY_NAME = 21;
    const ORDERING_FACILITY_ADDRESS = 22;
    const ORDERING_FACILITY_PHONE_NUMBER = 23;
    const ORDERING_PROVIDER_ADDRESS = 24;
    // HL7 v2.4
    const ORDER_STATUS_MODIFIER = 25;
    // HL7 v2.5
    const ADVANCED_BENEFICIARY_NOTICE_OVERRIDE_REASON = 26;
    const FILLERS_EXPECTED_AVAILABILITY_DATETIME = 27;
    const CONFIDENTIALITY_CODE = 28;
    const ORDER_TYPE = 29;
    const ENTERER_AUTHORIZATION_MODE = 30;
    // HL7 v2.6
    const PARENT_UNIVERSAL_SERVICE_IDENTIFIER = 31;
    // 2.7.1
    const ADVANCED_BENEFICIARY_NOTICE_DATE = 32;
    const ALTERNATE_PLACER_ORDER_NUMBER = 33;
    // 2.8
    const ORDER_WORKFLOW_PROFILE = 34;

    /**
     * Set the default validation classes used by this segment
     */
    public function setDefaultValidationClasses()
    {
        $this->defaultValidationClasses = [self::ORDER_CONTROL => [GenericTable::class, 'T0119'],
            self::ORDER_STATUS => [GenericTable::class, 'T0038'],
            self::RESPONSE_FLAG => [GenericTable::class, 'T0121'],
            self::ORDER_TYPE => [GenericTable::class, 'T0482'],
            self::ENTERER_AUTHORIZATION_MODE => [GenericTable::class, 'T0483'],
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
                return self::CALL_BACK_PHONE_NUMBER;
            case T0104::RELEASE_2_2:
            case T0104::RELEASE_2_3:
                return self::ACTION_BY;
            case T0104::RELEASE_2_3_1:
                return self::ORDERING_PROVIDER_ADDRESS;
            case T0104::RELEASE_2_4:
                return self::ORDER_STATUS_MODIFIER;
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
                return self::ENTERER_AUTHORIZATION_MODE;
            case T0104::RELEASE_2_6:
                return self::PARENT_UNIVERSAL_SERVICE_IDENTIFIER;
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
                return self::ALTERNATE_PLACER_ORDER_NUMBER;
            case T0104::RELEASE_2_8:
            default:
                return self::ORDER_WORKFLOW_PROFILE;
        }
    }

}
