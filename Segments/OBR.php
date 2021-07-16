<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\T0065;
use Prehmis\HL7Bundle\Tables\T0123;
use Prehmis\HL7Bundle\Tables\T0124;

/**
 * OBR segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-obr-segment
 */
class OBR extends ValidatedRepeatedSegmentAbstract
{

    const SEGMENT_NAME = 'OBR';
    // v2.1
    const ID = 1;
    const PLACER_ORDER_NUMBER = 2;
    const FILLER_ORDER_NUMBER = 3;
    const UNIVERSAL_SERVICE_ID = 4;
    const PRIORITY = 5;
    const REQUESTED_DATETIME = 6;
    const OBSERVATION_DATETIME = 7;
    const OBSERVATION_END_DATETIME = 8;
    const COLLECTION_VOLUME = 9;
    const COLLECTOR_IDENTIFIER = 10;
    const SPECIMEN_ACTION_CODE = 11;
    const DANGER_CODE = 12;
    const RELEVANT_CLINICAL_INFO = 13;
    const SPECIMEN_RECEIVED_DATETIME = 14;
    const SPECIMEN_SOURCE = 15;
    const ORDERING_PROVIDER = 16;
    const ORDER_CALLBACK_PHONE_NUMBER = 17;
    const PLACER_FIELD1 = 18;
    const PLACER_FIELD2 = 19;
    const FILLER_FIELD1 = 20;
    const FILLER_FIELD2 = 21;
    const RESULTS_RPT_STATUS_CHNG_DATETIME = 22;
    const CHARGE_TO_PRACTICE = 23;
    const DIAGNOSTIC_SERV_SECT_ID = 24;
    const RESULT_STATUS = 25;
    const PARENT_RESULT = 26;
    const QUANTITY_TIMING = 27;
    const RESULT_COPIES_TO = 28;
    const PARENT = 29;
    const TRANSPORTATION_MODE = 30;
    const REASON_FOR_STUDY = 31;
    const PRINCIPAL_RESULT_INTERPRETER = 32;
    const ASSISTANT_RESULT_INTERPRETER = 33;
    const TECHNICIAN = 34;
    const TRANSCRIPTIONIST = 35;
    const SCHEDULED_DATETIME = 36;
    // v2.3
    const NUMBER_OF_SAMPLE_CONTAINERS = 37;
    const TRANSPORT_LOGISTICS_OF_COLLECTED_SAMPLE = 38;
    const COLLECTORS_COMMENT = 39;
    const TRANSPORT_ARRANGEMENT_RESPONSIBILITY = 40;
    const TRANSPORT_ARRANGED = 41;
    const ESCORT_REQUIRED = 42;
    const PLANNED_PATIENT_TRANSPORT_COMMENT = 43;
    // HL7 v2.3.1
    const PROCEDURE_CODE = 44;
    const PROCEDURE_CODE_MODIFIER = 45;
    // HL7 v2.4
    const PLACER_SUPPLEMENTAL_SERVICE_INFORMATION = 46;
    const FILLER_SUPPLEMENTAL_SERVICE_INFORMATION = 47;
    // HL7 v2.5
    const MEDICALLY_NECESSARY_DUPLICATE_PROCEDURE_REASON = 48;
    const RESULT_HANDLING = 49;
    // HL7 v2.5.1
    const PARENT_UNIVERSAL_SERVICE_IDENTIFIER = 50;
    // HL7 v2.7
    const OBSERVATION_GROUP_ID = 51;
    const PARENT_OBSERVATION_GROUP_ID = 52;
    const ALTERNATE_PLACER_ORDER_NUMBER = 53;
    // 2.7.1
    const PARENT_ORDER = 54;

    /**
     * Return the default validation classes used by this segment
     * 
     * @return array
     */
    public function getDefaultValidationClasses(): array
    {
        return [self::SPECIMEN_ACTION_CODE => T0065::class,
            self::DIAGNOSTIC_SERV_SECT_ID => T0074::class,
            self::RESULT_STATUS => T0123::class,
            self::TRANSPORTATION_MODE => T0124::class,
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
                return self::SCHEDULED_DATETIME;
            case T0104::RELEASE_2_3:
                return self::PLANNED_PATIENT_TRANSPORT_COMMENT;
            case T0104::RELEASE_2_3_1:
                return self::PROCEDURE_CODE_MODIFIER;
            case T0104::RELEASE_2_4:
                return self::FILLER_SUPPLEMENTAL_SERVICE_INFORMATION;
            case T0104::RELEASE_2_5:
                return self::RESULT_HANDLING;
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
                return self::PARENT_UNIVERSAL_SERVICE_IDENTIFIER;
            case T0104::RELEASE_2_7:
                return self::ALTERNATE_PLACER_ORDER_NUMBER;
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::PARENT_ORDER;
        }
    }

}
