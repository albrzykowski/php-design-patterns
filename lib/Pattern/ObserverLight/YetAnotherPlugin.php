<?php
namespace Pattern\ObserverLight;
use Pattern\ObserverLight\PluginInterface;

class YetAnotherPlugin implements PluginInterface
{
  public function react($args)
  {
    echo 'Yet another plugin works with: ' . implode(",", $args) .  "\r\n";
  }
}

