<?php
namespace Pattern\Prototype;
/**
 * Cloneable interface
 * @package Patterns
 * @subpackage Prototype
 * @category creational
 */
interface Cloneable
{
    /**
     * By setting __clone() public we will allow clonning instances
     */
    public function __clone();
}