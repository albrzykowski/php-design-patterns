<?php
namespace Pattern\Iterator;
/**
 * Entity class - Plain Old PHP Object (POPO)
 * @package Patterns
 * @subpackage Iterator
 * @category behavioral
 */
class Entity
{
    /**
     * Name of Entity
     * @return string
     */
    private $name;
    /**
     * Class constructor
     * @param string $name name of entity
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
    /**
     * Gets name of Entity
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}