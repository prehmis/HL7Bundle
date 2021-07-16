<?php
    
namespace Prehmis\HL7Bundle\Tables\v271;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0483
 * Authorization Mode
 * HL7 version 2.7.1
 *
 */
final class T0483 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ELECTRONIC = 'EL';
    const E_MAIL = 'EM';
    const FAX = 'FX';
    const IN_PERSON = 'IP';
    const MAIL = 'MA';
    const PAPER = 'PA';
    const PHONE = 'PH';
    const REFLEXIVE__AUTOMATED_SYSTEM_ = 'RE';
    const VIDEO_CONFERENCE = 'VC';
    const VOICE = 'VO';
            
    public static function choices(): array
    {
        return [
            self::ELECTRONIC => 'Electronic',
            self::E_MAIL => 'E-mail',
            self::FAX => 'Fax',
            self::IN_PERSON => 'In Person',
            self::MAIL => 'Mail',
            self::PAPER => 'Paper',
            self::PHONE => 'Phone',
            self::REFLEXIVE__AUTOMATED_SYSTEM_ => 'Reflexive (Automated system)',
            self::VIDEO_CONFERENCE => 'Video-conference',
            self::VOICE => 'Voice',
            ];
    }
      
}