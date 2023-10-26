<?php
namespace Pattern\Observer\Spl;
/**
 * Subject class
 * @package Patterns
 * @subpackage Observer
 * @category behavioral
 */
class Observer implements \SplObserver 
{
    /**
     * {@inheritdoc} 
     */
    public function update(\SplSubject $subject) 
    {
        return sprintf('The subject "%s" updating me', get_class($subject));
    }
}
