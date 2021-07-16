<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0008
 * Acknowledgment Code
 * HL7 version 2.2
 *
 */
final class T0008 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const AA = 'AA';
    const AE = 'AE';
    const AR = 'AR';
    const CA = 'CA';
    const CE = 'CE';
    const CR = 'CR';
            
    public static function choices(): array
    {
        return [
            self::AA => 'Application accept (original mode) / Application acknowledgement: accept (enhanced mode)',
            self::AE => 'Application error (original mode) / Application acknowledgement: error (enhanced mode)',
            self::AR => 'Application reject (original mode) / Application acknowledgement: reject (enhanced mode)',
            self::CA => 'Enhanced mode:  Application acknowledgement:  Commit Accept',
            self::CE => 'Enhanced mode:  Application acknowledgement:  Commit Error',
            self::CR => 'Enhanced mode:  Application acknowledgement:  Commit Reject',
            ];
    }
      
}