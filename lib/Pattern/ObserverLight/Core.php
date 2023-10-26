<?php
namespace Pattern\ObserverLight;
use Pattern\ObserverLight\EventDispatcher;

class Core
{
  public static function doSomething()
  {
    $args = ["Matt", "Joanne", "Robert"];
    EventDispatcher::dispatch("do.something.event", $args);
  }
}
