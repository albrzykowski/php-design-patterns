<?php
namespace Pattern\Memento;
class Memento
{
    private $state;
    public function __construct($state)
    {
        $this->state = $state; // Zapisanie stanu w konstruktorze
    }

	/**
	 * @return mixed
	 */
	public function getState() {
		return $this->state;
	}
}