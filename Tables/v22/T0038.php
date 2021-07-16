<?php
    
namespace Prehmis\HL7Bundle\Tables\v22;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0038
 * Order status
 * HL7 version 2.2
 *
 */
final class T0038 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ORDER_WAS_CANCELED = 'CA';
    const ORDER_IS_COMPLETED = 'CM';
    const ORDER_WAS_DISCONTINUED = 'DC';
    const ERROR___ORDER_NOT_FOUND = 'ER';
    const ORDER_IS_ON_HOLD = 'HD';
    const IN_PROCESS___UNSPECIFIED = 'IP';
    const ORDER_HAS_BEEN_REPLACED = 'RP';
    const IN_PROCESS___SCHEDULED = 'SC';
            
    public static function choices(): array
    {
        return [
            self::ORDER_WAS_CANCELED => 'Order was canceled',
            self::ORDER_IS_COMPLETED => 'Order is completed',
            self::ORDER_WAS_DISCONTINUED => 'Order was discontinued',
            self::ERROR___ORDER_NOT_FOUND => 'Error - order not found',
            self::ORDER_IS_ON_HOLD => 'Order is on hold',
            self::IN_PROCESS___UNSPECIFIED => 'In process - unspecified',
            self::ORDER_HAS_BEEN_REPLACED => 'Order has been replaced',
            self::IN_PROCESS___SCHEDULED => 'In process - scheduled',
            ];
    }
      
}