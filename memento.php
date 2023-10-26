<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');


$originator = new \Pattern\Memento\Originator();
$caretaker = new \Pattern\Memento\Caretaker();
$originator->setState(new \Pattern\Memento\State("First state"));
$caretaker->setMemento($originator->getMemento());
echo '1: ' . $originator->getState() . "\r\n";

$originator->setState(new \Pattern\Memento\State("Second state"));
echo '2: ' . $originator->getState() . "\r\n";

$originator->restoreMemento($caretaker->getMemento());
echo '3: ' . $originator->getState() . "\r\n";