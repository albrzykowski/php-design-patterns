<?php
namespace Pattern\Composite;
/**
 * Nodeable interface
 * @package Patterns
 * @subpackage Composite
 * @category structural
 */
interface Nodeable
{
    /**
     * Renders node 
     * @return Closure
     */
    public function render();
    /**
     * Returns specific node's name 
     * @return string
     */
    public function getName();
}