<?php
namespace Pattern\Proxy;
/**
 * UserProxy class
 * @package Patterns
 * @subpackage Proxy
 * @category structural
 */
class UserProxy implements UserInterface
{
    /**
     * Sample property
     * @var string
     */
    private $user;
    /**
     * Class constructor
     * @return void
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    /**
     * Gets $user property
     * @return string
     */
    public function getName()
    {
        if ($this->user !== null) {
            return $this->user->name;
        } else {
            return $this->session->name;
        }
    }
    
}