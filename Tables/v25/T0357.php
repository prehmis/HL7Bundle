<?php

namespace Prehmis\HL7Bundle\Tables\v25;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0357
 * Message Error Condition Codes
 * HL7 version 2.5
 *
 */
final class T0357 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const MESSAGE_ACCEPTED = 0;
    const SEGMENT_SEQUENCE_ERROR = 100;
    const REQUIRED_FIELD_MISSING = 101;
    const DATA_TYPE_ERROR = 102;
    const TABLE_VALUE_NOT_FOUND = 103;
    const UNSUPPORTED_MESSAGE_TYPE = 200;
    const UNSUPPORTED_EVENT_CODE = 201;
    const UNSUPPORTED_PROCESSING_ID = 202;
    const UNSUPPORTED_VERSION_ID = 203;
    const UNKNOWN_KEY_IDENTIFIER = 204;
    const DUPLICATE_KEY_IDENTIFIER = 205;
    const APPLICATION_RECORD_LOCKED = 206;
    const APPLICATION_INTERNAL_ERROR = 207;

    public static function choices(): array
    {
        return [
            self::MESSAGE_ACCEPTED => 'Message accepted',
            self::SEGMENT_SEQUENCE_ERROR => 'Segment sequence error',
            self::REQUIRED_FIELD_MISSING => 'Required field missing',
            self::DATA_TYPE_ERROR => 'Data type error',
            self::TABLE_VALUE_NOT_FOUND => 'Table value not found',
            self::UNSUPPORTED_MESSAGE_TYPE => 'Unsupported message type',
            self::UNSUPPORTED_EVENT_CODE => 'Unsupported event code',
            self::UNSUPPORTED_PROCESSING_ID => 'Unsupported processing id',
            self::UNSUPPORTED_VERSION_ID => 'Unsupported version id',
            self::UNKNOWN_KEY_IDENTIFIER => 'Unknown key identifier',
            self::DUPLICATE_KEY_IDENTIFIER => 'Duplicate key identifier',
            self::APPLICATION_RECORD_LOCKED => 'Application record locked',
            self::APPLICATION_INTERNAL_ERROR => 'Application internal error',
            ];
    }

}