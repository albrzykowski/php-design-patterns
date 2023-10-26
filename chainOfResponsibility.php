<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$even  = new Pattern\ChainOfResponsibility\EvenHandler();
$even->setNextHandler(
    new Pattern\ChainOfResponsibility\OddHandler()
);
var_dump($even->handle(17));


$even  = new Pattern\ChainOfResponsibility\EvenHandler();
$even->setNextHandler(
    new Pattern\ChainOfResponsibility\OddHandler()
);
var_dump($even->handle(2));