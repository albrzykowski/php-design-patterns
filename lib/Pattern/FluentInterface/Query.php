<?php
namespace Pattern\FluentInterface;
/**
 * Query class
 * @package Patterns
 * @subpackage FluentInterface
 */
class Query
{
    /**
     * Sample query
     * @return string
     */
    private $query = '';
    /**
     * Sample select
     * @return Query
     */
    public function select($param)
    {
        $this->query .= sprintf('<p>Selecting item: %s</p>', $param);
        return $this;
    }
    /**
     * Sample where
     * @return Query
     */
    public function where($param)
    {
        $this->query .= sprintf('<p>Adding condition: %s</p>', $param);
        return $this;
    }
    /**
     * Sample orderBy
     * @return Query
     */
    public function orderBy($param)
    {
        $this->query .= sprintf('<p>Defining order: %s</p>', $param);
        return $this;
    }
    /**
     * Returns $this->query
     * @return string
     */
    public function __toString()
    {
        return $this->query;
    }
}