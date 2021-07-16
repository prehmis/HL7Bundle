<?php
    
namespace Prehmis\HL7Bundle\Tables\v271;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0063
 * Relationship
 * HL7 version 2.7.1
 *
 */
final class T0063 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ASSOCIATE = 'ASC';
    const BROTHER = 'BRO';
    const CARE_GIVER = 'CGV';
    const CHILD = 'CHD';
    const HANDICAPPED_DEPENDENT = 'DEP';
    const LIFE_PARTNER = 'DOM';
    const EMERGENCY_CONTACT = 'EMC';
    const EMPLOYEE = 'EME';
    const EMPLOYER = 'EMR';
    const EXTENDED_FAMILY = 'EXF';
    const FOSTER_CHILD = 'FCH';
    const FRIEND = 'FND';
    const FATHER = 'FTH';
    const GRANDCHILD = 'GCH';
    const GUARDIAN = 'GRD';
    const GRANDPARENT = 'GRP';
    const MANAGER = 'MGR';
    const MOTHER = 'MTH';
    const NATURAL_CHILD = 'NCH';
    const NONE = 'NON';
    const OTHER_ADULT = 'OAD';
    const OTHER = 'OTH';
    const OWNER = 'OWN';
    const PARENT = 'PAR';
    const STEPCHILD = 'SCH';
    const SELF = 'SEL';
    const SIBLING = 'SIB';
    const SISTER = 'SIS';
    const SPOUSE = 'SPO';
    const TRAINER = 'TRA';
    const UNKNOWN = 'UNK';
    const WARD_OF_COURT = 'WRD';
            
    public static function choices(): array
    {
        return [
            self::ASSOCIATE => 'Associate',
            self::BROTHER => 'Brother',
            self::CARE_GIVER => 'Care giver',
            self::CHILD => 'Child',
            self::HANDICAPPED_DEPENDENT => 'Handicapped dependent',
            self::LIFE_PARTNER => 'Life partner',
            self::EMERGENCY_CONTACT => 'Emergency contact',
            self::EMPLOYEE => 'Employee',
            self::EMPLOYER => 'Employer',
            self::EXTENDED_FAMILY => 'Extended family',
            self::FOSTER_CHILD => 'Foster child',
            self::FRIEND => 'Friend',
            self::FATHER => 'Father',
            self::GRANDCHILD => 'Grandchild',
            self::GUARDIAN => 'Guardian',
            self::GRANDPARENT => 'Grandparent',
            self::MANAGER => 'Manager',
            self::MOTHER => 'Mother',
            self::NATURAL_CHILD => 'Natural child',
            self::NONE => 'None',
            self::OTHER_ADULT => 'Other adult',
            self::OTHER => 'Other',
            self::OWNER => 'Owner',
            self::PARENT => 'Parent',
            self::STEPCHILD => 'Stepchild',
            self::SELF => 'Self',
            self::SIBLING => 'Sibling',
            self::SISTER => 'Sister',
            self::SPOUSE => 'Spouse',
            self::TRAINER => 'Trainer',
            self::UNKNOWN => 'Unknown',
            self::WARD_OF_COURT => 'Ward of court',
            ];
    }
      
}