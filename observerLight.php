<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$core  = new \Pattern\ObserverLight\Core();
$plugin = new \Pattern\ObserverLight\Plugin();
$yetAnotherPlugin = new \Pattern\ObserverLight\YetAnotherPlugin();

\Pattern\ObserverLight\EventDispatcher::connect('do.something.event', $plugin);
\Pattern\ObserverLight\EventDispatcher::connect('do.something.event', $yetAnotherPlugin);

$core->doSomething();