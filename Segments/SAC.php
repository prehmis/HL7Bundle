<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\ValidatedRepeatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * SAC segment class
 * Ref: https://www.interfaceware.com/hl7-standard/hl7-segment-SAC.html
 */
class SAC extends ValidatedRepeatedSegmentAbstract implements ValidatedSegmentInterface
{

    const SEGMENT_NAME = 'SAC';
    const ID = 1;
    const ACCESSION_IDENTIFIER = 2;
    const CONTAINER_IDENTIFIER = 3;
    const PRIMARY_CONTAINER_IDENTIFIER = 4;
    const EQUIPMENT_CONTAINER_IDENTIFIER = 5;
    const SPECIMEN_SOURCE = 6;
    const REGISTRATION_DATE_TIME = 7;
    const CONTAINER_STATUS = 8;
    const CARRIER_TYPE = 9;
    const CARRIER_IDENTIFIER = 10;
    const POSITION_IN_CARRIER = 11;
    const TRAY_TYPE_SAC = 12;
    const TRAY_IDENTIFIER = 13;
    const POSITION_IN_TRAY = 14;
    const LOCATION = 15;
    const CONTAINER_HEIGHT = 16;
    const CONTAINER_DIAMETER = 17;
    const BARRIER_DELTA = 18;
    const BOTTOM_DELTA = 19;
    const CONTAINER_SIZE_UNITS = 20;
    const CONTAINER_VOLUME = 21;
    const AVAILABLE_SPECIMEN_VOLUME = 22;
    const INITIAL_SPECIMEN_VOLUME = 23;
    const VOLUME_UNITS = 24;
    const SEPARATOR_TYPE = 25;
    const CAP_TYPE = 26;
    const ADDITIVE = 27;
    const SPECIMEN_COMPONENT = 28;
    const DILUTION_FACTOR = 29;
    const TREATMENT = 30;
    const TEMPERATURE = 31;
    const HEMOLYSIS_INDEX = 32;
    const HEMOLYSIS_INDEX_UNITS = 33;
    const LEPEMIA_INDEX = 34;
    const LEPEMIA_INDEX_UNITS = 35;
    const ICTERUS_INDEX = 36;
    const ICTERUS_INDEX_UNITS = 37;
    const FIBRIN_INDEX = 38;
    const FIBRIN_INDEX_UNITS = 39;
    const SYSTEM_INDUCED_CONTAMINANTS = 40;
    const DRUG_INTERFERENCE = 41;
    const ARTIFICIAL_BLOOD = 42;
    const SPECIAL_HANDLING_CODE = 43;
    const OTHER_ENVIRONMENTAL_FACTORS = 44;

    /**
     * Set the default validation classes used by this segment
     */
    public function setDefaultValidationClasses()
    {
        $this->defaultValidationClasses = [self::CONTAINER_STATUS => [GenericTable::class, 'T0370']];
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
                return 0;
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::OTHER_ENVIRONMENTAL_FACTORS;
        }
    }

}
