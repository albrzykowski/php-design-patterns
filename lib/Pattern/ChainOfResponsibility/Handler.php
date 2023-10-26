<?php
namespace Pattern\ChainOfResponsibility;
/**
 * Handler class
 * @package Patterns
 * @subpackage ChainOfResponsibility
 * @category behavioral
 */
abstract class Handler
{
    /**
     * Instance of next hadler if current doesnt macth criteria
     * @var Handler
     */
    protected $nextHandler;
    /**
     * Handles client's request
     * @return mixed
     */
    abstract public function handle($request);
    /**
     * Sets next handler of a chain
     * @return void
     */
    public function setNextHandler(Handler $handler)
    {
        $this->nextHandler = $handler;
    }
}