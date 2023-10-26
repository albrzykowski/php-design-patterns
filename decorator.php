<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$decorator  = new Pattern\Decorator\Decorator(
    new Pattern\Decorator\Base()
);
$decorator->foo();