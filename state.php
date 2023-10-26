<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$account = new \Pattern\State\Account('Leszek', 150);
$account->credit(200);
$account->close();
$account->credit(100);