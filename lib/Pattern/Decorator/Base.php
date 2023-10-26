<?php
namespace Pattern\Decorator;
/**
 * Base class
 * @package Patterns
 * @subpackage Decorator
 * @category structural
 */
class Base
{
    /**
     * Sample method method
     * @return void
     */
    public function foo()
    {
        printf('<p>Calling origin method: <em>%s</em></p>', __METHOD__);
    }
}