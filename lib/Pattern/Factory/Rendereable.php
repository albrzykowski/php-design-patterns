<?php
namespace Pattern\Factory;
/**
 * IRendereable interface
 * @package Patterns
 * @subpackage Factory
 * @category creational
 */
interface Rendereable
{
    /**
     * Render method should be implemented 
     * @return string rendered view
     */
    public function render();
}