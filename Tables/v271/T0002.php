<?php
    
namespace Prehmis\HL7Bundle\Tables\v271;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0002
 * Marital Status
 * HL7 version 2.7.1
 *
 */
final class T0002 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const SEPARATED = 'A';
    const UNMARRIED = 'B';
    const COMMON_LAW = 'C';
    const DIVORCED = 'D';
    const LEGALLY_SEPARATED = 'E';
    const LIVING_TOGETHER = 'G';
    const INTERLOCUTORY = 'I';
    const MARRIED = 'M';
    const ANNULLED = 'N';
    const OTHER = 'O';
    const DOMESTIC_PARTNER = 'P';
    const REGISTERED_DOMESTIC_PARTNER = 'R';
    const SINGLE = 'S';
    const UNREPORTED = 'T';
    const UNKNOWN = 'U';
    const WIDOWED = 'W';
            
    public static function choices(): array
    {
        return [
            self::SEPARATED => 'Separated',
            self::UNMARRIED => 'Unmarried',
            self::COMMON_LAW => 'Common law',
            self::DIVORCED => 'Divorced',
            self::LEGALLY_SEPARATED => 'Legally Separated',
            self::LIVING_TOGETHER => 'Living together',
            self::INTERLOCUTORY => 'Interlocutory',
            self::MARRIED => 'Married',
            self::ANNULLED => 'Annulled',
            self::OTHER => 'Other',
            self::DOMESTIC_PARTNER => 'Domestic partner',
            self::REGISTERED_DOMESTIC_PARTNER => 'Registered domestic partner',
            self::SINGLE => 'Single',
            self::UNREPORTED => 'Unreported',
            self::UNKNOWN => 'Unknown',
            self::WIDOWED => 'Widowed',
            ];
    }
      
}