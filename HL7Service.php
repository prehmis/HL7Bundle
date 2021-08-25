<?php

namespace Prehmis\HL7Bundle;

use Prehmis\HL7Bundle\Messages\Message;
use Prehmis\HL7Bundle\Messages\ACK;
use Prehmis\HL7Bundle\Messages\AcknowledgeMessage;
use Prehmis\HL7Bundle\Segments\Segment;
use Prehmis\HL7Bundle\Segments\MSH;
use Prehmis\HL7Bundle\Tables\v28\T0104;

/**
 * The HL7 class is a factory class for HL7 messages and segments.
 *
 * The factory class provides the convenience of changing several defaults for HL7 messaging globally, like separators,
 * etc. Note that some default settings use characters that have special meaning in PHP, like the HL7 escape character.
 * To be able to set these values, escape the special characters.
 *
 */
class HL7Service
{

    const SEGMENT_SEPARATOR = 'SEGMENT_SEPARATOR';
    const SEGMENT_ENDING_BAR = 'SEGMENT_ENDING_BAR';
    const FIELD_SEPARATOR = 'FIELD_SEPARATOR';
    const NULL_VALUE = 'NULL_VALUE';
    const COMPONENT_SEPARATOR = 'COMPONENT_SEPARATOR';
    const REPETITION_SEPARATOR = 'REPETITION_SEPARATOR';
    const ESCAPE_CHARACTER = 'ESCAPE_CHARACTER';
    const SUBCOMPONENT_SEPARATOR = 'SUBCOMPONENT_SEPARATOR';
    const HL7_VERSION = 'HL7_VERSION';
    const CHARACTER_SET = 'CHARACTER_SET';
    const AUTO_INCREMENT_INDICES = 'AUTO_INCREMENT_INDICES';
    const KEEP_EMPTY_SUB_FIELDS = 'KEEP_EMPTY_SUB_FIELDS';
    const DO_NOT_SPLIT_REPETITION = 'DO_NOT_SPLIT_REPETITION';
    const RESET_INDICES = 'RESET_INDICES';
    const VALIDATE_FIELDS = 'VALIDATE_FIELDS';
    CONST CUSTOM_VALIDATION_CLASSES = 'CUSTOM_VALIDATION_CLASSES';

    /**
     * Holds all global HL7 settings.
     */
    protected $options;

    /**
     * Create a new instance of the HL7 factory, and set global
     * defaults.
     */
    public function __construct(array $options = null)
    {
        $this->resetOptions();

        if ($options)
            foreach ($options as $name => $value) {
                $this->setOption($name, $value);
            }
    }

    private function resetOptions()
    {
        $this->options[self::SEGMENT_SEPARATOR] = "\X0D\X0A";
        $this->options[self::SEGMENT_ENDING_BAR] = false; // Bar (|) at end of each segment. Default: Present
        $this->options[self::FIELD_SEPARATOR] = '|';
        $this->options[self::NULL_VALUE] = '""';
        $this->options[self::COMPONENT_SEPARATOR] = '^';
        $this->options[self::REPETITION_SEPARATOR] = '~';
        $this->options[self::ESCAPE_CHARACTER] = '\\';
        $this->options[self::SUBCOMPONENT_SEPARATOR] = '&';

        // Validation
        $this->options[self::HL7_VERSION] = T0104::RELEASE_2_5;
        $this->options[self::VALIDATE_FIELDS] = true;
        $this->options[self::CUSTOM_VALIDATION_CLASSES] = [];

        // 
        $this->options[self::AUTO_INCREMENT_INDICES] = true;
        $this->options[self::KEEP_EMPTY_SUB_FIELDS] = false;
        $this->options[self::DO_NOT_SPLIT_REPETITION] = false;
        $this->options[self::RESET_INDICES] = true;
    }

    /**
     * Return global defaults
     * 
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Constructor for Message. Consider using the HL7 factory to obtain a message instead.
     *
     * The constructor takes an optional string argument that is a string representation of a HL7 message. If the
     * string representation is not a valid HL7 message. according to the specifications, undef is returned instead of
     * a new instance. This means that segments should be separated within the message with the segment separator
     * (defaults to \015) or a newline, and segments should be syntactically correct. When using the string argument
     * constructor, make sure that you have escaped any characters that would have special meaning in PHP.
     *
     * The control characters and field separator will take the values from the MSH segment, if set. Otherwise defaults
     * will be used. Changing the MSH fields specifying the field separator and control characters after the MSH has
     * been added to the message will result in setting these values for the message.
     *
     * If the message couldn't be created, for example due to a erroneous HL7 message string, an error is raised.
     * @param string|null $msgStr
     * @param bool $keepEmptySubFields Set this to true to retain empty sub fields
     * @param bool $resetIndices Reset Indices of each segment to 1.
     * @param bool $autoIncrementIndices True: auto-increment for each instance of same segment.
     * @throws HL7Exception
     * @throws \ReflectionException
     */
    public function createMessage(string $msgStr = null, $validate = null): Message
    {
        $options = $this->options;
        if (isset($validate)) {
            $options[self::VALIDATE_FIELDS] = $validate ? true : false;
        }

        return new Message($msgStr, $options);
    }
    
    public function createSegment(string $segmentName, array $fields = null, $validate = null): Segment
    {
        $options = $this->options;
        if (isset($validate)) {
            $options[self::VALIDATE_FIELDS] = $validate ? true : false;
        }
        
        $className = "Prehmis\\HL7Bundle\\Segments\\$segmentName";
        if (class_exists($className)) {
            return new $className($fields, $options);
        } 
        
        return new Segment($segmentName, $fields);
        
    }

    /**
     * Convenience module implementing an acknowledgement (ACK) message. This can be used in HL7 servers to create an
     * acknowledgement for an incoming message.
     *
     * @param Message|null $incoming
     * @param MSH|null $msh
     * @param boolean $validate
     * @return ACK
     * @throws \Exception
     * @throws \InvalidArgumentException
     */
    public function createACK(Message $incoming = null, MSH $msh = null, bool $validate = null): ACK
    {
        $options = $this->options;
        if (isset($validate)) {
            $options[self::VALIDATE_FIELDS] = $validate ? true : false;
        }

        return new ACK($incoming, $msh, $this->options);
    }
    
    /**
     * Convenience module implementing any acknowledgement message. This can be used in HL7 servers to create an
     * acknowledgement for an incoming message.
     *
     * @param string $type Table 76
     * @param string $structure Table 354
     * @param Message|null $incoming
     * @param MSH|null $msh
     * @param bool $validate
     * @return AcknowledgeMessage
     * @throws \Exception
     * @throws \InvalidArgumentException
     */
    public function createAcknowledgeMessage(string $type, string $structure, Message $incoming = null, MSH $msh = null, bool $validate = null): AcknowledgeMessage
    {
        $options = $this->options;
        if (isset($validate)) {
            $options[self::VALIDATE_FIELDS] = $validate ? true : false;
        }
        
        return new AcknowledgeMessage($type, $structure, $incoming, $msh, $this->options);
    }

    /**
     * Set the HL7 global variable
     *
     * @access protected
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public function setOption(string $name, $value): bool
    {
        $characterOptions = [self::ESCAPE_CHARACTER,
            self::FIELD_SEPARATOR,
            self::REPETITION_SEPARATOR,
            self::SUBCOMPONENT_SEPARATOR,
            self::COMPONENT_SEPARATOR];
        if (in_array($name, $characterOptions)) {
            if (is_string($value) && strlen($value) == 1) {
                $this->options[$name] = $value;
                return true;
            } else {
                throw new \InvalidArgumentException("Parameter '".$name."' should be of single character. Received: '$value'");
            }
        }

        $booleanOptions = [self::AUTO_INCREMENT_INDICES,
            self::KEEP_EMPTY_SUB_FIELDS,
            self::DO_NOT_SPLIT_REPETITION,
            self::RESET_INDICES,
            self::VALIDATE_FIELDS,
            self::SEGMENT_ENDING_BAR];
        if (in_array($name, $booleanOptions)) {
            $this->options[$name] = $value ? true : false;
            return true;
        }

        $stringOptions = [self::NULL_VALUE,
            self::HL7_VERSION,
            self::SEGMENT_SEPARATOR];
        if (in_array($name, [$stringOptions])) {
            $this->options[$name] = (string) $value;
            return true;
        }
        
        $arrayOptions = [self::CUSTOM_VALIDATION_CLASSES];
        if (in_array($name, [$arrayOptions]) && is_array($value)) {
            $this->options[$name] = $value;
            return true;
        }

        throw new \InvalidArgumentException("Parameter '".$name."' is not supported.");
    }

}
