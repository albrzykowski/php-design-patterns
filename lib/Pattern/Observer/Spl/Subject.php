<?php
namespace Pattern\Observer\Spl;
/**
 * Subject class
 * @package Patterns
 * @subpackage Observer
 * @category behavioral
 */
class Subject extends \SplSubject
{
    public function getName()
    {
        return $this->name;
    }
    /**
     * Sample property
     * @var array
     */
    private $elements;
    /**
     * Class constructor
     * @return void
     */
    public function __construct() 
    {
        $this->elements = array();
    }
    /**
     * {@inheritdoc}
     */
    public function attach(\SplObserver $observer) 
    {
        $this->elements[] = $observer;
    }
    /**
     * {@inheritdoc}
     */
    public function detach(\SplObserver $observer) 
    {
    }
    /**
     * {@inheritdoc}
     */
    public function notify() 
    {
        foreach ($this->elements as $obj) {
            $obj->update($this);
        }
    }
}