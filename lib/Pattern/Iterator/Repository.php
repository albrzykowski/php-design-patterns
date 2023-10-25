<?php
namespace Pattern\Iterator;
/**
 * Repository class
 * @package Patterns
 * @subpackage Iterator
 * @category behavioral
 */
class Repository implements \ArrayAccess
{
    /**
     * Array of Entities
     * @return array
     */
    private $entities = [];
    /**
     * Adds entity
     * @param Entity $entity instance of entity
     * @return void
     */
    public function addEntity($entity)
    {
        $this->entities[] = $entity;
    }
    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->entities[] = $value;
        } else {
            $this->entities[$offset] = $value;
        }
    }
    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        return isset($this->entities[$offset]);
    }
    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        unset($this->entities[$offset]);
    }
    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return isset($this->entities[$offset])
            ? $this->entities[$offset]
            : null;
    }
}