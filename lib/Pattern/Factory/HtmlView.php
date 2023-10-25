<?php
namespace Pattern\Factory;
/**
 * HTMLView class
 * @package Patterns
 * @subpackage Factory
 * @category creational
 */
class HtmlView implements Rendereable
{
    /**
     * Intervace implementation
     * @param array $data array of data for rendering
     * @return void
     */
    public function __construct(array $data)
    {
        // Data binding etc.
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
        return 'Rendering HTML';
    }
}