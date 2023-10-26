<?php
namespace Pattern\Proxy;
/**
 * Session class - $_SESSION encapsulation
 * @package Patterns
 * @subpackage Proxy
 * @category structural
 */
class Session
{
    /**
     * Session array
     * @var array
     */
    private $session = [];
    /**
     * Class constructor
     * @return void
     */
    public function __construct()
    {
        session_start();
        $this->session = &$_SESSION;
    }
    /**
     * Sets any property
     * @param string $name name of property
     * @param mixed $value value of property
     * @return void
     */
    public function __set($name, $value)
    {
        $this->session[$name] = $value;
    }
    /**
     * Gets any property
     * @param string $name name of property
     * @return mixed
     */
    public function __get($name)
    {
        return $this->session[$name];
    }
}