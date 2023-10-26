<?php
namespace Pattern\Memento;
class State
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
        // return sprintf('State name: %s', $this->name);
    }
}