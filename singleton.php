<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$instance_1  = \Pattern\Singleton\Singleton::getInstance();
var_dump($instance_1->id);
$instance_2 = clone $instance_1;
var_dump($instance_2->id);

$instance_2->id = uniqid(time(), true);
var_dump($instance_2->id);
var_dump($instance_1->id);