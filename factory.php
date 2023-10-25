<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$view = Pattern\Factory\ViewFactory::create('Atom', ['foo', 'bar']);
echo $view->render();