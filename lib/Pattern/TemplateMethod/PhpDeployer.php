<?php
namespace Pattern\TemplateMethod;
/**
 * PHPDeployer class
 * @package Patterns
 * @subpackage TemplateMethod
 * @category behavioral
 */
class PhpDeployer extends Deployer
{
    /**
     * {@inheritdoc}
     */
    public function prepareTests()
    {
        echo '<p>Preparing PHPUnit tests</p>';
    }
    /**
     * {@inheritdoc}
     */
    public function code()
    {
        echo '<p>Codding PHP bundle</p>';
    }
    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        return false; // Ooops... It can be difficult with PHP
    }
    /**
     * {@inheritdoc}
     */
    public function test()
    {
        echo '<p>Running tests</p>';
    }
    /**
     * {@inheritdoc}
     */
    public function createRevision()
    {
        echo '<p>Pushing at GitHub</p>';
    }
}