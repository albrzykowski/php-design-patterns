<?php
namespace Pattern\ChainOfResponsibility;
/**
 * EvenHandler class
 * @package Patterns
 * @subpackage ChainOfResponsibility
 * @category behavioral
 */
class EvenHandler extends Handler
{
    /**
     * {@inheritdoc}
     */
    public function handle($request)
    {
        if ($request % 2 == 0) {
            return 'I am even';
        }
        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }
    }
}