<?php
namespace Pattern\Command;
/**
 * Executable interface
 * @package Patterns
 * @subpackage Command
 * @category behavioral
 */
interface Executable
{
    /**
     * Executes command 
     * @return boolean
     */
    public function execute();
    /**
     * Undos command 
     * @return string
     */
    public function undo();
}