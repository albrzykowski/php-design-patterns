<?php
namespace Pattern\TemplateMethod;
/**
 * Deployer class
 * @package Patterns
 * @subpackage TemplateMethod
 * @category behavioral
 */
abstract class Deployer
{
    /**
     * Prepares tests
     * @return mixed
     */
    abstract public function prepareTests();
    /**
     * Creates code
     * @return mixed
     */
    abstract public function code();
    /**
     * Compiles code
     * @return mixed
     */
    abstract public function compile();
    /**
     * Tests code
     * @return mixed
     */
    abstract public function test();
    /**
     * Creates revision
     * @return mixed
     */
    abstract public function createRevision();
    /**
     * Deploys system
     * @return mixed
     */
    public function deploy()
    {
        try {
            $this->prepareTests();
            $this->code();
            $this->compile();
            $this->test();
            $this->createRevision();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } 
}
