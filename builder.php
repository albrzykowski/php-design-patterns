<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$builder  = new Pattern\Builder\ConcreteBuilder(
    new Pattern\Builder\Product()
);
$director = new Pattern\Builder\Director($builder);
$director->create();

var_dump($director->getProduct());