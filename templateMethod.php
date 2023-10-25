<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$deployer  = new \Pattern\TemplateMethod\PhpDeployer();
$deployer->deploy();