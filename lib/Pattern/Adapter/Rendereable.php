<?php
namespace Pattern\Adapter;
/**
 * Rendereable interface
 * @package Patterns
 * @subpackage Adapter
 * @category structural
 */
interface Rendereable
{
    /**
     * Render method should be implemented 
     * @return string rendered view
     */
    public function render();
}