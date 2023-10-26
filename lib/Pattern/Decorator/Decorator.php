<?php
namespace Pattern\Decorator;
/**
 * Decorator class. Remember about universal interface for Base and Decorator!
 * @package Patterns
 * @subpackage Decorator
 * @category structural
 */
class Decorator
{
    /**
     * Instance of object that will be decorated
     * @var Base
     */
    private $decorable;
    /**
     * Class constructor assings instance of Base object to private 
     * property 
     * @param Base $decorable instance of object that will be decorated
     * @return void
     */
    public function __construct(Base $decorable)
    {
        $this->decorable = $decorable;
    }
    /**
     * Decorates origin method
     * @return mixed
     */
    public function foo()
    {
        printf('<p>Do something extra by: <em>%s</em></p>', __METHOD__);
        $this->decorable->foo();
        printf('<p>Do something extra again by: <em>%s</em></p>', __METHOD__);
    }
}