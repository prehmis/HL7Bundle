<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0008
 * Acknowledgment Code
 * HL7 version 2.5.1
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
            self::AA => 'Original mode: Application Accept - Enhanced mode: Application acknowledgment: Accept',
            self::AE => 'Original mode: Application Error - Enhanced mode: Application acknowledgment: Error',
            self::AR => 'Original mode: Application Reject - Enhanced mode: Application acknowledgment: Reject',
            self::CA => 'Enhanced mode: Accept acknowledgment: Commit Accept',
            self::CE => 'Enhanced mode: Accept acknowledgment: Commit Error',
            self::CR => 'Enhanced mode: Accept acknowledgment: Commit Reject',
            ];
    }
      
}