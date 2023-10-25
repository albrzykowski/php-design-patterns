<?php
namespace Pattern\Builder;
/**
 * FirstBuilder class
 * @package Patterns
 * @subpackage Builder
 * @category creational
 */
class ConcreteBuilder implements Buildeable
{
    /**
     * Product instance
     * @var Product
     */
    private $product;
    /**
     * Class constructor
     * @param Product $product Product instance
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    /**
     * {@inheritdoc}
     */
    public function buildPartOne()
    {
        $this->product->addPart('foo');
    }
    /**
     * {@inheritdoc}
     */
    public function buildPartTwo()
    {
        $this->product->addPart('bar');
    }
    /**
     * Returns builded product
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}