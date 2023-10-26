<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

// Returned closures are called with PHP 5.4 features
// Composite
call_user_func(
    (new Pattern\Composite\Container('Latest news'))
        ->addChild(new Pattern\Composite\Article('Some news title'))
        ->addChild(new Pattern\Composite\Article('Some latest news title'))
        ->render()
);
// Leaf
call_user_func(
    (new Pattern\Composite\Article('Some independent article'))
        ->render()
);