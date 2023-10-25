<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$adapter  = new Pattern\Adapter\AtomAdapter(
    new Pattern\Adapter\Atom()
);
var_dump($adapter->render());