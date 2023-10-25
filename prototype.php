<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$origin = new Pattern\Prototype\ConcretePrototype("Leszek");
$copy = clone $origin;
var_dump($origin);
var_dump($copy);


// Live example: adding following SQL conditions for sample, base Query object