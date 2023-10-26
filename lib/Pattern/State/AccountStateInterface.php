<?php
namespace Pattern\State;

interface AccountStateInterface
{
    function credit($account, $amount);
}
