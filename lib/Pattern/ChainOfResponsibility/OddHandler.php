<?php
namespace Pattern\ChainOfResponsibility;
/**
 * OddHandler class
 * @package Patterns
 * @subpackage ChainOfResponsibility
 * @category behavioral
 */
class OddHandler extends Handler
{
    /**
     * {@inheritdoc}
     */
    public function handle($request)
    {
        if ($request % 2 != 0) {
            return 'I am odd';
        }
        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }
    }
}