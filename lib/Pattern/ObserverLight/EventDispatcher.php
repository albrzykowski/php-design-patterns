<?php
namespace Pattern\ObserverLight;

class EventDispatcher
{
  private static $observers = [];
  public static function dispatch($eventName, $args)
  {
    // implement
  }
  public static function connect($eventName, $observer)
  {
    // implement
  }
}
