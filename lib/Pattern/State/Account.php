<?php
namespace Pattern\State;

use Pattern\State\AccountOpen;
use Pattern\State\AccountClosed;

class Account
{
    private $balance = 0;
    private $owner = null;
    private $state = null;

    public function __construct($owner, $balance)
    {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->state = new AccountOpen();
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    
    public function credit($amount)
    {
        $this->state->credit($this, $amount); // delegate
    }
    public function close()
    {
        $this->state = new AccountClosed();
    }
}
