<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$userProxy = new Pattern\Proxy\UserProxy(
    new \Pattern\Proxy\Session()
);
$userProxy->setName('John');
echo $userProxy->getName();
echo $userProxy->update();