<?php
namespace Pattern\Prototype;
/**
 * ConcretePrototype class
 * @package Patterns
 * @subpackage Prototype
 * @category creational
 */
class ConcretePrototype implements Cloneable
{
    /**
     * Sample property
     * @var string
     */
    private $name;
    /**
     * Class constructor
     * @param string $name sample property
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
    /**
     * Returns $name property
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * {@inheritdoc}
     */
    public function __clone()
    {
    }
}