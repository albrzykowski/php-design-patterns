<?php
namespace Pattern\Builder;
/**
 * Product class
 * @package Patterns
 * @subpackage Builder
 * @category creational
 */
class Product
{
    /**
     * Product parts
     * @var array
     */
    private $parts = [];
    /**
     * Adds some part of a product
     * @param mixed $part some part
     * @return void
     */
    public function addPart($part)
    {
        $this->parts[] = $part;
    }
}