<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\T0125;
use Prehmis\HL7Bundle\Tables\T0085;
use Prehmis\HL7Bundle\Tables\T0163;

/**
 * OBX segment class
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/OBX 
 */
class OBX extends ValidatedRepeatedSegmentAbstract
{

    const SEGMENT_NAME = 'OBX';
    // hl7 v2.1
    const ID = 1;
    const VALUE_TYPE = 2;
    const OBSERVATION_IDENTIFIER = 3;
    const OBSERVATION_SUB_ID = 4;
    const OBSERVATION_VALUE = 5;
    const UNITS = 6;
    const REFERENCE_RANGE = 7;
    const ABNORMAL_FLAGS = 8;
    const PROBABILITY = 9;
    const NATURE_OF_ABNORMAL_TEST = 10;
    const OBSERVE_RESULT_STATUS = 11;
    const DATA_LAST_OBS_NORMAL_VALUES = 12;
    // hl7 v2.2
    const USER_DEFINED_ACCESS_CHECKS = 13;
    const DATETIME_OF_THE_OBSERVATION = 14;
    const PRODUCERS_ID = 15;
    const RESPONSIBLE_OBSERVER = 16;
    // hl7 v2.3
    const OBSERVATION_METHOD = 17;
    // hl7 v2.4
    const EQUIPMENT_INSTANCE_IDENTIFIER = 18;
    const DATETIME_OF_ANALYSIS = 19;
    // hl7 v2.5.1
    const PERFORMING_ORGANIZATION_NAME = 23;
    const PERFORMING_ORGANIZATION_ADDRESS = 24;
    const PERFORMING_ORGANIZATION_MEDICAL_DIRECTOR = 25;
    // hl7 v2.6
    const OBSERVATION_SITE = 20;
    const OBSERVATION_INSTANCE_IDENTIFIER = 21;
    const MOOD_CODE = 22;
    // hl7 V2.7
    const PATIENT_RESULTS_RELEASE_CATEGORY = 26;
    // hl7 v2.8
    const ROOT_CAUSE = 27;
    const LOCAL_PROCESS_CONTROL = 28;

    /**
     * Return the default validation classes used by this segment
     * 
     * @return array
     */
    public function getDefaultValidationClasses(): array
    {
        return [self::VALUE_TYPE => T0125::class,
            self::OBSERVE_RESULT_STATUS => T0085::class,
                self::OBSERVATION_SITE => T0163::class];
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
                return self::DATA_LAST_OBS_NORMAL_VALUES;
            case T0104::RELEASE_2_2:
                return self::RESPONSIBLE_OBSERVER;
            case T0104::RELEASE_2_3:
            case T0104::RELEASE_2_3_1:
                return self::OBSERVATION_METHOD;
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
                return self::DATETIME_OF_ANALYSIS;
            case T0104::RELEASE_2_5_1:
                return self::PERFORMING_ORGANIZATION_MEDICAL_DIRECTOR;
            case T0104::RELEASE_2_6:
                return self::MOOD_CODE;
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
                return self::PATIENT_RESULTS_RELEASE_CATEGORY;
            case T0104::RELEASE_2_8:
            default:
                return self::LOCAL_PROCESS_CONTROL;
        }
    }

}
