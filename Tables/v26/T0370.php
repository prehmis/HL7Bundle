<?php
    
namespace Prehmis\HL7Bundle\Tables\v26;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0370
 * Container Status
 * HL7 version 2.6
 *
 */
final class T0370 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const IDENTIFIED = 'I';
    const LEFT_EQUIPMENT = 'L';
    const MISSING = 'M';
    const IN_PROCESS = 'O';
    const IN_POSITION = 'P';
    const PROCESS_COMPLETED = 'R';
    const UNKNOWN = 'U';
    const CONTAINER_UNAVAILABLE = 'X';
            
    public static function choices(): array
    {
        return [
            self::IDENTIFIED => 'Identified',
            self::LEFT_EQUIPMENT => 'Left Equipment',
            self::MISSING => 'Missing',
            self::IN_PROCESS => 'In Process',
            self::IN_POSITION => 'In Position',
            self::PROCESS_COMPLETED => 'Process Completed',
            self::UNKNOWN => 'Unknown',
            self::CONTAINER_UNAVAILABLE => 'Container Unavailable',
            ];
    }
      
}