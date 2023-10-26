<?php
namespace Pattern\Memento;

class Originator
{
    private $state;

    public function getMemento()
    {
        return new Memento($this->state);
    }

    public function restoreMemento($memento)
    {
        $this->state = $memento->getState();
    }

	/**
	 * @return mixed
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * @param mixed $state 
	 * @return self
	 */
	public function setState($state) {
		$this->state = $state;
	}
}