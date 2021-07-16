<?php
    
namespace Prehmis\HL7Bundle\Tables\v27;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0278
 * Filler status codes
 * HL7 version 2.7
 *
 */
final class T0278 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const BLOCKED = 'BLOCKED';
    const BOOKED = 'BOOKED';
    const CANCELLED = 'CANCELLED';
    const COMPLETE = 'COMPLETE';
    const DC = 'DC';
    const DELETED = 'DELETED';
    const NOSHOW = 'NOSHOW';
    const OVERBOOK = 'OVERBOOK';
    const PENDING = 'PENDING';
    const STARTED = 'STARTED';
    const WAITLIST = 'WAITLIST';
            
    public static function choices(): array
    {
        return [
            self::BLOCKED => 'The indicated time slot(s) is(are) blocked',
            self::BOOKED => 'The indicated appointment is booked',
            self::CANCELLED => 'The indicated appointment was stopped from occurring (canceled prior to starting)',
            self::COMPLETE => 'The indicated appointment has completed normally (was not discontinued, canceled, or deleted)',
            self::DC => 'The indicated appointment was discontinued (DCed while in progress, discontinued parent appointment, or discontinued child appointment)',
            self::DELETED => 'The indicated appointment was deleted from the filler application',
            self::NOSHOW => 'The patient did not show up for the appointment',
            self::OVERBOOK => 'The appointment has been confirmed; however it is confirmed in an overbooked state',
            self::PENDING => 'Appointment has not yet been confirmed',
            self::STARTED => 'The indicated appointment has begun and is currently in progress',
            self::WAITLIST => 'Appointment has been placed on a waiting list for a particular slot, or set of slots',
            ];
    }
      
}