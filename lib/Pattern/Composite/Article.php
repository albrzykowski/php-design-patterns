<?php
namespace Pattern\Composite;
/**
 * Container class
 * @package Patterns
 * @subpackage Composite
 * @category structural
 */
class Article implements Nodeable
{
    /**
     * Node's name
     * @var string
     */
    private $name;
    /**
     * Class constructor
     * @param string $name node's name
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
        return function () {
            printf('<h1>%s</h1>', $this->name);
        };
    }
}