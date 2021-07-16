<?php
    
namespace Prehmis\HL7Bundle\Tables\v271;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0200
 * Name Type
 * HL7 version 2.7.1
 *
 */
final class T0200 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ASSIGNED = 'A';
    const BIRTH_NAME = 'B';
    const BAD_NAME = 'BAD';
    const ADOPTED_NAME = 'C';
    const CUSTOMARY_NAME = 'D';
    const LICENSING_NAME = 'I';
    const BUSINESS_NAME = 'K';
    const OFFICIAL_REGISTRY_NAME = 'L';
    const MAIDEN_NAME = 'M';
    const MASKED = 'MSK';
    const NICKNAME = 'N';
    const TEMPORARILY_UNAVAILABLE = 'NAV';
    const NEWBORN_NAME = 'NB';
    const NO_LONGER_TO_BE_USED = 'NOUSE';
    const NAME_OF_PARTNER_SPOUSE = 'P';
    const REGISTERED_NAME = 'R';
    const RELIGIOUS = 'REL';
    const PSEUDONYM = 'S';
    const INDIGENOUS_TRIBAL = 'T';
    const TEMPORARY_NAME = 'TEMP';
    const UNKNOWN = 'U';
            
    public static function choices(): array
    {
        return [
            self::ASSIGNED => 'Assigned',
            self::BIRTH_NAME => 'Birth name',
            self::BAD_NAME => 'Bad Name',
            self::ADOPTED_NAME => 'Adopted Name',
            self::CUSTOMARY_NAME => 'Customary Name',
            self::LICENSING_NAME => 'Licensing Name',
            self::BUSINESS_NAME => 'Business name',
            self::OFFICIAL_REGISTRY_NAME => 'Official Registry Name',
            self::MAIDEN_NAME => 'Maiden Name',
            self::MASKED => 'Masked',
            self::NICKNAME => 'Nickname',
            self::TEMPORARILY_UNAVAILABLE => 'Temporarily Unavailable',
            self::NEWBORN_NAME => 'Newborn Name',
            self::NO_LONGER_TO_BE_USED => 'No Longer To Be Used',
            self::NAME_OF_PARTNER_SPOUSE => 'Name of Partner/Spouse',
            self::REGISTERED_NAME => 'Registered Name',
            self::RELIGIOUS => 'Religious',
            self::PSEUDONYM => 'Pseudonym',
            self::INDIGENOUS_TRIBAL => 'Indigenous/Tribal',
            self::TEMPORARY_NAME => 'Temporary Name',
            self::UNKNOWN => 'Unknown',
            ];
    }
      
}