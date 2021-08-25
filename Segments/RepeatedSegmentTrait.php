<?php

namespace Prehmis\HL7Bundle\Segments;

use Prehmis\HL7Bundle\HL7Service;

/**
 *
 * @author MBERTELER
 */
trait RepeatedSegmentTrait
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;
    
    public function __construct(array $fields = null, array $options = [])
    {
        parent::__construct($fields, $options);
        
        if (isset($options[HL7Service::AUTO_INCREMENT_INDICES]) && $options[HL7Service::AUTO_INCREMENT_INDICES]) {
            $this->setField(static::ID, $this::$setId++);
        }
    }
    
    public function __destruct()
    {
        $this->setField(static::ID, $this::$setId--);
    }
    
    /**
     * Reset index of this segment
     * @param int $index
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }
}
