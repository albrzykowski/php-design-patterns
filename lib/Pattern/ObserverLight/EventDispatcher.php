<?php
namespace Pattern\ObserverLight;

class EventDispatcher
{
  private static $observers = [];
  public static function dispatch($eventName, $args)
  {
    foreach (self::$observers[$eventName] as $observer) {
      $observer->react($args);
    }
  }
  public static function connect($eventName, $observer)
  {
    self::$observers[$eventName][] = $observer;
  }
}
