<?php
namespace Pattern\State;
use Pattern\State\AccountStateInterface;

    class AccountOpen implements AccountStateInterface
    {
	    public function credit($account, $amount)
        {
		    $account->setBalance($account->getBalance() + $amount);
            echo "Current balanse is: " . $account->getBalance();
	    }
    }

