<?php
namespace Pattern\Command;
/**
 * Payment class
 * @package Patterns
 * @subpackage Command
 * @category behavioral
 */
class Payment implements Executable
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        // Return randomly: true or false
        // array_rand() returns key, not value
        return (boolean) rand(0, 1);
    }
    /**
     * {@inheritdoc}
     */
    public function undo()
    {
        return 'Client received money back';
    }
}