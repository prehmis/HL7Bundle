<?php
    
namespace Prehmis\HL7Bundle\Tables\v251;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0038
 * Order status
 * HL7 version 2.5.1
 *
 */
final class T0038 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const A = 'A';
    const CA = 'CA';
    const CM = 'CM';
    const DC = 'DC';
    const ER = 'ER';
    const HD = 'HD';
    const IP = 'IP';
    const RP = 'RP';
    const SC = 'SC';
            
    public static function choices(): array
    {
        return [
            self::A => 'Some, but not all, results available',
            self::CA => 'Order was canceled',
            self::CM => 'Order is completed',
            self::DC => 'Order was discontinued',
            self::ER => 'Error, order not found',
            self::HD => 'Order is on hold',
            self::IP => 'In process, unspecified',
            self::RP => 'Order has been replaced',
            self::SC => 'In process, scheduled',
            ];
    }
      
}