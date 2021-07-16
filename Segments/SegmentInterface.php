<?php

namespace Prehmis\HL7Bundle\Segments;

/**
 *
 * @author MBERTELER
 */
interface SegmentInterface
{
    public function __construct(array $fields = null, array $options = []);
}
