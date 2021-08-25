<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\Segments\Segment;
use Prehmis\HL7Bundle\HL7Service;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentAbstract;
use Prehmis\HL7Bundle\Segments\ValidatedSegmentInterface;
use Prehmis\HL7Bundle\Tables\v28\T0104;
use Prehmis\HL7Bundle\Tables\GenericTable;

/**
 * MSH (message header) segment class
 *
 * Usage:
 * ```php
 * $seg = new MSH();
 *
 * $seg->setField(9, "ADT^A24");
 * echo $seg->getField(1);
 * ```
 *
 * The MSH is an implementation of the Segment class. The MSH segment is a bit different from other segments, in that
 * the first field is the field separator after the segment name. Other fields thus start counting from 2! The setting
 * for the field separator for a whole message can be changed by the setField method on index 1 of the MSH for that
 * message.  The MSH segment also contains the default settings for field 2, COMPONENT_SEPARATOR, REPETITION_SEPARATOR,
 * ESCAPE_CHARACTER and SUBCOMPONENT_SEPARATOR. These fields default to ^, ~, \ and & respectively.
 *
 * Reference: https://corepointhealth.com/resource-center/hl7-resources/hl7-msh-message-header
 */
class MSH extends ValidatedSegmentAbstract implements ValidatedSegmentInterface
{

    const SEGMENT_NAME = 'MSH';
    // 2.1
    const FIELD_SEPARATOR = 1;
    const ENCODING_CHARACTERS = 2;
    const SENDING_APPLICATION = 3;
    const SENDING_FACILITY = 4;
    const RECEIVING_APPLICATION = 5;
    const RECEIVING_FACILITY = 6;
    const DATETIME_OF_MESSAGE = 7;
    const SECURITY = 8;
    const MESSAGE_TYPE = 9;
    const MESSAGE_CONTROL_ID = 10;
    const PROCESSING_ID = 11;
    const VERSION_ID = 12;
    const SEQUENCE_NUMBER = 13;
    const CONTINUATION_POINTER = 14;
    // 2.2 
    const ACCEPT_ACKNOWLEDGEMENT_TYPE = 15;
    const APPLICATION_ACKNOWLEDGEMENT_TYPE = 16;
    const COUNTRY_CODE = 17;
    // 2.3
    const CHARACTER_SET = 18;
    const PRINCIPAL_LANGUAGE = 19;
    // 2.3.1
    const ALTERNATIVE_CHAR_SET = 20;
    // 2.4
    const MESSAGE_PROFILE_ID = 21;
    // 2.6
    const SENDING_RESPONSIBLE_ORGANIZATION = 22;
    const RECEIVING_RESPONSIBLE_ORGANIZATION = 23;
    const SENDING_NETWORK_ADDRESS = 24;
    const RECEIVING_NETWORK_ADDRESS = 25;

    /**
     * Create an instance of the MSH segment.
     *
     * If an array argument is provided, all fields will be filled from that array. Note that for composed fields and
     * sub-components, the array may hold sub-arrays and sub-sub-arrays. If the reference is not given, the MSH segment
     * will be created with the MSH 1,2,7,10 and 12 fields filled in for convenience.
     *
     * @param null|array $fields
     * @param array $options
     * @throws \InvalidArgumentException
     * @throws \Exception
     */
    public function __construct(array $fields = null, array $options = [])
    {
        // Ensure the hl7 version of the message is used to validate instead of that of the $options
        if (is_array($fields)) {
            if (isset($fields[self::VERSION_ID - 1])) {
                $options[HL7Service::HL7_VERSION] = $fields[self::VERSION_ID - 1];
            }
        }
        parent::__construct($fields, $options);

        if (isset($fields)) { // We're done if MSH fields were provided
            return;
        }
        $this->setField(self::VERSION_ID, $options[HL7Service::HL7_VERSION] ?? T0104::RELEASE_2_5);
        $this->setField(self::FIELD_SEPARATOR, $options[HL7Service::FIELD_SEPARATOR] ?? '|');

        if (isset($options[HL7Service::COMPONENT_SEPARATOR]) &&
                isset($options[HL7Service::REPETITION_SEPARATOR]) &&
                isset($options[HL7Service::ESCAPE_CHARACTER]) &&
                isset($options[HL7Service::SUBCOMPONENT_SEPARATOR])) {
            $this->setField(self::ENCODING_CHARACTERS,
                    $options[HL7Service::COMPONENT_SEPARATOR].
                    $options[HL7Service::REPETITION_SEPARATOR].
                    $options[HL7Service::ESCAPE_CHARACTER].
                    $options[HL7Service::SUBCOMPONENT_SEPARATOR]
            );
        } else {
            $this->setField(self::ENCODING_CHARACTERS, '^~\\&');
        }

        $this->setField(self::DATETIME_OF_MESSAGE, strftime('%Y%m%d%H%M%S'));
        $this->setField(self::MESSAGE_CONTROL_ID, $this->getField(self::DATETIME_OF_MESSAGE).random_int(10000, 99999));
    }

    /**
     * Set the default validation classes used by this segment
     */
    public function setDefaultValidationClasses()
    {
        $this->defaultValidationClasses = [
            self::ACCEPT_ACKNOWLEDGEMENT_TYPE => [GenericTable::class, 'T0155'],
            self::APPLICATION_ACKNOWLEDGEMENT_TYPE => [GenericTable::class, 'T0155'],
            self::CHARACTER_SET => [GenericTable::class, 'T0211']
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
                return self::CONTINUATION_POINTER;
            case T0104::RELEASE_2_2:
                return self::COUNTRY_CODE;
            case T0104::RELEASE_2_3:
                return self::PRINCIPAL_LANGUAGE;
            case T0104::RELEASE_2_3_1:
                return self::ALTERNATIVE_CHAR_SET;
            case T0104::RELEASE_2_4:
            case T0104::RELEASE_2_5:
            case T0104::RELEASE_2_5_1:
                return self::MESSAGE_PROFILE_ID;
            case T0104::RELEASE_2_6:
            case T0104::RELEASE_2_7:
            case T0104::RELEASE_2_7_1:
            case T0104::RELEASE_2_8:
            default:
                return self::RECEIVING_NETWORK_ADDRESS;
        }
    }

    /**
     * Set the field specified by index to value.
     *
     * Indices start at 1, to stay with the HL7 standard. Trying to set the value at index 0 has no effect. Setting the
     * value on index 1, will effectively change the value of FIELD_SEPARATOR for the message containing this segment,
     * if the value has length 1; setting the field on index 2 will change the values of COMPONENT_SEPARATOR,
     * REPETITION_SEPARATOR, ESCAPE_CHARACTER and SUBCOMPONENT_SEPARATOR for the message, if the string is of length 4.
     *
     * @param int $index Index of field
     * @param string $value
     * @return Prehmis\HL7Bundle\Segments\Segment
     * @throws \InvalidArgumentException
     */
    public function setField(int $index, $value = ''): Segment
    {
        if (($index === self::FIELD_SEPARATOR) && strlen($value) !== 1) {
            throw new \InvalidArgumentException('Field separator must be a single character');
        }

        if (($index === self::ENCODING_CHARACTERS) && strlen($value) !== 4) {
            throw new \InvalidArgumentException('Must supply 4 encoding characters');
        }

        return parent::setField($index, $value);
    }

    // -------------------- Setter Methods ------------------------------

    /**
     * 
     * @param type $value
     * @return Prehmis\HL7Bundle\Segments\MSH
     * @throws \InvalidArgumentException
     */
    public function setFieldSeparator($value): MSH
    {
        return $this->setField(self::FIELD_SEPARATOR, $value);
    }

    /**
     * 
     * @param type $value
     * @return Prehmis\HL7Bundle\Segments\MSH
     * @throws \InvalidArgumentException
     */
    public function setEncodingCharacters($value): MSH
    {
        return $this->setField(self::ENCODING_CHARACTERS, $value);
    }

    /**
     *
     * Sets message type to MSH segment.
     *
     * If trigger event is already set, then it is preserved
     *
     * Example:
     *
     * If field value is ORU^R01 and you call
     *
     * ```
     * $msh->setMessageType('ORM');
     * ```
     *
     * Then the new field value will be ORM^R01.
     * If it was empty then the new value will be just ORM.
     *
     * @param string $value
     * @return Prehmis\HL7Bundle\Segments\MSH
     * @throws \InvalidArgumentException
     */
    public function setMessageType($value): MSH
    {
        $typeField = $this->getField(self::MESSAGE_TYPE);
        if (is_array($typeField)) {
            $typeField[0] = $value;
            return $this->setField(self::MESSAGE_TYPE, $typeField);
        }
        return $this->setField(self::MESSAGE_TYPE, $value);
    }

    /**
     *
     * Sets trigger event to MSH segment.
     *
     * If message type is already set, then it is preserved
     *
     * Example:
     *
     * If field value is ORU^R01 and you call
     *
     * ```
     * $msh->setTriggerEvent('R30');
     * ```
     *
     * Then the new field value will be ORU^R30.
     * If trigger event was not set then it will set the new value.
     *
     * @param string $value
     * @param int $position
     * @return Prehmis\HL7Bundle\Segments\MSH
     * @throws \InvalidArgumentException
     */
    public function setTriggerEvent($value): MSH
    {
        $typeField = $this->getField(self::MESSAGE_TYPE);
        if (is_array($typeField)) {
            $typeField[1] = $value;
            return $this->setField(self::MESSAGE_TYPE, $typeField);
        }

        return $this->setField(self::MESSAGE_TYPE, [$typeField, $value]);
    }

    public function setMessageStructure($value): MSH
    {
        $typeField = $this->getField(self::MESSAGE_TYPE);
        if (is_array($typeField)) {
            $typeField[2] = $value;
            return $this->setField(self::MESSAGE_TYPE, $typeField);
        }
        
        return $this->setField(self::MESSAGE_TYPE, ['','',$value]);
    }

    /**
     * ORM / ORU etc.
     * @return string
     */
    public function getMessageType(): string
    {
        $typeField = $this->getField(self::MESSAGE_TYPE);
        if (is_array($typeField) && !empty($typeField)) {
            return (string) $typeField[0];
        }
        return (string) $typeField;
    }

    /**
     * 
     * @return null|string|array The value of the field
     */
    public function getTriggerEvent()
    {
        $triggerField = $this->getField(self::MESSAGE_TYPE);
        if (is_array($triggerField) && !empty($triggerField[1])) {
            return $triggerField[1];
        }
        return null;
    }

    public function getMessageStructure(): string
    {
        $triggerField = $this->getField(self::MESSAGE_TYPE);
        if (is_array($triggerField) && !empty($triggerField[2])) {
            return $triggerField[2];
        }
        return null;
    }

}
