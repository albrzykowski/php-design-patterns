<?php
namespace Pattern\Proxy;
/**
 * User class
 * @package Patterns
 * @subpackage Proxy
 * @category structural
 */
class User implements UserInterface
{
    /**
     * Updates user
     * @return mixed
     */
    public function update()
    {
        return '<p>User object updated</p>';
    }
}