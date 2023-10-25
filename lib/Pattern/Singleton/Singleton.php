<?php
namespace Pattern\Singleton;
/**
 * Singleton class
 * @package Patterns
 * @subpackage Singleton
 * @category creational
 */
class Singleton
{
    /**
     * Self instance
     * @var Singleton
     */
    private static $instance = null;
    /**
     * Unique id of instance
     * @var string
     */
    public $id;
    /**
     * Class constructor should be private to prevent create instance from
     * outside 
     * @return void
     */
    private function __construct()
    {
        $this->id = uniqid(time(), true);
    }
    /**
     * Create instance of class if it doesn't exists and returns it
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    /**
     * Clone should be private for Singletons
     * @return void
     */
    // Remove comment and disallow clonning
    // private function __clone() {}
}