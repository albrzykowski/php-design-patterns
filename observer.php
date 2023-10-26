<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$subject  = new \Pattern\Observer\Spl\Subject();
$observer = new \Pattern\Observer\Spl\Observer();
$subject->attach($observer);
$subject->notify();