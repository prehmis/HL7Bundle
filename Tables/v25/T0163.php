<?php
    
namespace Prehmis\HL7Bundle\Tables\v25;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0163
 * Body Site
 * HL7 version 2.5
 *
 */
final class T0163 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const BILATERAL_EARS = 'BE';
    const BILATERAL_NARES = 'BN';
    const BUTTOCK = 'BU';
    const CHEST_TUBE = 'CT';
    const LEFT_ARM = 'LA';
    const LEFT_ANTERIOR_CHEST = 'LAC';
    const LEFT_ANTECUBITAL_FOSSA = 'LACF';
    const LEFT_DELTOID = 'LD';
    const LEFT_EAR = 'LE';
    const LEFT_EXTERNAL_JUGULAR = 'LEJ';
    const LEFT_FOOT = 'LF';
    const LEFT_GLUTEUS_MEDIUS = 'LG';
    const LEFT_HAND = 'LH';
    const LEFT_INTERNAL_JUGULAR = 'LIJ';
    const LEFT_LOWER_ABD_QUADRANT = 'LLAQ';
    const LEFT_LOWER_FOREARM = 'LLFA';
    const LEFT_MID_FOREARM = 'LMFA';
    const LEFT_NARIS = 'LN';
    const LEFT_POSTERIOR_CHEST = 'LPC';
    const LEFT_SUBCLAVIAN = 'LSC';
    const LEFT_THIGH = 'LT';
    const LEFT_UPPER_ARM = 'LUA';
    const LEFT_UPPER_ABD_QUADRANT = 'LUAQ';
    const LEFT_UPPER_FOREARM = 'LUFA';
    const LEFT_VENTRAGLUTEAL = 'LVG';
    const LEFT_VASTUS_LATERALIS = 'LVL';
    const NEBULIZED = 'NB';
    const RIGHT_EYE = 'OD';
    const LEFT_EYE = 'OS';
    const BILATERAL_EYES = 'OU';
    const PERIANAL = 'PA';
    const PERINEAL = 'PERIN';
    const RIGHT_ARM = 'RA';
    const RIGHT_ANTERIOR_CHEST = 'RAC';
    const RIGHT_ANTECUBITAL_FOSSA = 'RACF';
    const RIGHT_DELTOID = 'RD';
    const RIGHT_EAR = 'RE';
    const RIGHT_EXTERNAL_JUGULAR = 'REJ';
    const RIGHT_FOOT = 'RF';
    const RIGHT_GLUTEUS_MEDIUS = 'RG';
    const RIGHT_HAND = 'RH';
    const RIGHT_INTERNAL_JUGULAR = 'RIJ';
    const RT_LOWER_ABD_QUADRANT = 'RLAQ';
    const RIGHT_LOWER_FOREARM = 'RLFA';
    const RIGHT_MID_FOREARM = 'RMFA';
    const RIGHT_NARIS = 'RN';
    const RIGHT_POSTERIOR_CHEST = 'RPC';
    const RIGHT_SUBCLAVIAN = 'RSC';
    const RIGHT_THIGH = 'RT';
    const RIGHT_UPPER_ARM = 'RUA';
    const RIGHT_UPPER_ABD_QUADRANT = 'RUAQ';
    const RIGHT_UPPER_FOREARM = 'RUFA';
    const RIGHT_VENTRAGLUTEAL = 'RVG';
    const RIGHT_VASTUS_LATERALIS = 'RVL';
            
    public static function choices(): array
    {
        return [
            self::BILATERAL_EARS => 'Bilateral Ears',
            self::BILATERAL_NARES => 'Bilateral Nares',
            self::BUTTOCK => 'Buttock',
            self::CHEST_TUBE => 'Chest Tube',
            self::LEFT_ARM => 'Left Arm',
            self::LEFT_ANTERIOR_CHEST => 'Left Anterior Chest',
            self::LEFT_ANTECUBITAL_FOSSA => 'Left Antecubital Fossa',
            self::LEFT_DELTOID => 'Left Deltoid',
            self::LEFT_EAR => 'Left Ear',
            self::LEFT_EXTERNAL_JUGULAR => 'Left External Jugular',
            self::LEFT_FOOT => 'Left Foot',
            self::LEFT_GLUTEUS_MEDIUS => 'Left Gluteus Medius',
            self::LEFT_HAND => 'Left Hand',
            self::LEFT_INTERNAL_JUGULAR => 'Left Internal Jugular',
            self::LEFT_LOWER_ABD_QUADRANT => 'Left Lower Abd Quadrant',
            self::LEFT_LOWER_FOREARM => 'Left Lower Forearm',
            self::LEFT_MID_FOREARM => 'Left Mid Forearm',
            self::LEFT_NARIS => 'Left Naris',
            self::LEFT_POSTERIOR_CHEST => 'Left Posterior Chest',
            self::LEFT_SUBCLAVIAN => 'Left Subclavian',
            self::LEFT_THIGH => 'Left Thigh',
            self::LEFT_UPPER_ARM => 'Left Upper Arm',
            self::LEFT_UPPER_ABD_QUADRANT => 'Left Upper Abd Quadrant',
            self::LEFT_UPPER_FOREARM => 'Left Upper Forearm',
            self::LEFT_VENTRAGLUTEAL => 'Left Ventragluteal',
            self::LEFT_VASTUS_LATERALIS => 'Left Vastus Lateralis',
            self::NEBULIZED => 'Nebulized',
            self::RIGHT_EYE => 'Right Eye',
            self::LEFT_EYE => 'Left Eye',
            self::BILATERAL_EYES => 'Bilateral Eyes',
            self::PERIANAL => 'Perianal',
            self::PERINEAL => 'Perineal',
            self::RIGHT_ARM => 'Right Arm',
            self::RIGHT_ANTERIOR_CHEST => 'Right Anterior Chest',
            self::RIGHT_ANTECUBITAL_FOSSA => 'Right Antecubital Fossa',
            self::RIGHT_DELTOID => 'Right Deltoid',
            self::RIGHT_EAR => 'Right Ear',
            self::RIGHT_EXTERNAL_JUGULAR => 'Right External Jugular',
            self::RIGHT_FOOT => 'Right Foot',
            self::RIGHT_GLUTEUS_MEDIUS => 'Right Gluteus Medius',
            self::RIGHT_HAND => 'Right Hand',
            self::RIGHT_INTERNAL_JUGULAR => 'Right Internal Jugular',
            self::RT_LOWER_ABD_QUADRANT => 'Rt Lower Abd Quadrant',
            self::RIGHT_LOWER_FOREARM => 'Right Lower Forearm',
            self::RIGHT_MID_FOREARM => 'Right Mid Forearm',
            self::RIGHT_NARIS => 'Right Naris',
            self::RIGHT_POSTERIOR_CHEST => 'Right Posterior Chest',
            self::RIGHT_SUBCLAVIAN => 'Right Subclavian',
            self::RIGHT_THIGH => 'Right Thigh',
            self::RIGHT_UPPER_ARM => 'Right Upper Arm',
            self::RIGHT_UPPER_ABD_QUADRANT => 'Right Upper Abd Quadrant',
            self::RIGHT_UPPER_FOREARM => 'Right Upper Forearm',
            self::RIGHT_VENTRAGLUTEAL => 'Right Ventragluteal',
            self::RIGHT_VASTUS_LATERALIS => 'Right Vastus Lateralis',
            ];
    }
      
}