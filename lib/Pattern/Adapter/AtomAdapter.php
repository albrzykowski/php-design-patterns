<?php
namespace Pattern\Adapter;
/**
 * AtomAdapter class
 * @package Patterns
 * @subpackage Adapter
 * @category structural
 */
class AtomAdapter implements Rendereable
{
    /**
     * Instance of object that will be adaptated
     * @var Base
     */
    private $base;
    /**
     * Class constructor assings instance of Atom object to private 
     * property 
     * @param Atom $base instance of object that will be adaptated
     * @return void
     */
    public function __construct(Atom $base)
    {
        $this->base = $base;
    }
    /**
     * Adaptates base method
     * @return string
     */
    public function render()
    {
        return $this->base->showAtom();
    }
}