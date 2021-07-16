<?php
    
namespace Prehmis\HL7Bundle\Tables\v23;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * Description of T0108
 * Query results level
 * HL7 version 2.3
 *
 */
final class T0108 extends ReadableEnum
{
    use ChoiceEnumTrait;

    const ORDER_PLUS_ORDER_STATUS = 'O';
    const RESULTS_WITHOUT_BULK_TEXT = 'R';
    const STATUS_ONLY = 'S';
    const FULL_RESULTS = 'T';
            
    public static function choices(): array
    {
        return [
            self::ORDER_PLUS_ORDER_STATUS => 'Order plus order status',
            self::RESULTS_WITHOUT_BULK_TEXT => 'Results without bulk text',
            self::STATUS_ONLY => 'Status only',
            self::FULL_RESULTS => 'Full results',
            ];
    }
      
}