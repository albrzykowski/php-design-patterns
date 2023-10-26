<?php
namespace Pattern\ObserverLight;
use Pattern\ObserverLight\PluginInterface;

class Plugin implements PluginInterface
{
  public function react($args)
  {
    echo 'I can do something with: ' . implode(",", $args) . "\r\n";
  }
}

