<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Prehmis\HL7Bundle\Segments;

/**
 *
 * @author MBERTELER
 */
interface ValidatedSegmentInterface extends SegmentInterface
{
    /**
     * Return the maximum amount of fields allowed by the hl7 version
     * 
     * @return int
     */
    public function getMaximumFields(): int;
    
    /**
     * Return an array of default validation classes for fields
     * 
     * @return array
     */
    public function getDefaultValidationClasses(): array;
    
    /**
     * Return the class name of the validation class to use for a field
     * 
     * @param int $index
     * @return string|null
     */    
    public function getValidationClass(int $index): ?string;
    
    /**
     * Set the validation class for a specific field
     * 
     * Set $fqn to '' to disable validation of a particular field
     * 
     * @param int $index
     * @param string $fqn
     */
    public function setValidationClass(int $index, string $fqn);
    
    /**
     * Validate each field and return the errors
     * 
     * @return array|null
     */
    public function validateFields(): ?array;

}
