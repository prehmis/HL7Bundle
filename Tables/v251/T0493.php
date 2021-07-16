<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0493
 * Specimen Condition
 * HL7 version 2.5.1
 *
 */
final class T0493 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AUTOLYZED = 'AUT';
    const CLOTTED = 'CLOT';
    const CONTAMINATED = 'CON';
    const COOL = 'COOL';
    const FROZEN = 'FROZ';
    const HEMOLYZED = 'HEM';
    const LIVE = 'LIVE';
    const ROOM_TEMPERATURE = 'ROOM';
    const SAMPLE_NOT_RECEIVED = 'SNR';
            
    public static function choices(): array
    {
        return [
            self::AUTOLYZED => 'Autolyzed',
            self::CLOTTED => 'Clotted',
            self::CONTAMINATED => 'Contaminated',
            self::COOL => 'Cool',
            self::FROZEN => 'Frozen',
            self::HEMOLYZED => 'Hemolyzed',
            self::LIVE => 'Live',
            self::ROOM_TEMPERATURE => 'Room temperature',
            self::SAMPLE_NOT_RECEIVED => 'Sample not received',
            ];
    }
      
}