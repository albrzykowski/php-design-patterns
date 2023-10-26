<?php
namespace Pattern\Memento;

class Caretaker
{
    private $mementos = [];
    public function getMemento() {
        return array_pop($this->mementos);
    }
    public function setMemento($memento) {
        return $this->mementos[] = $memento;
    }
    
}