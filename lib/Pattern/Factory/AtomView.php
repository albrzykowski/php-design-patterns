<?php
namespace Pattern\Factory;
/**
 * AtomView class
 * @package Patterns
 * @subpackage Factory
 * @category creational
 */
class AtomView implements Rendereable
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
        return 'Rendering Atom';
    }
}