<?php
namespace Pattern\Builder;
/**
 * Directory class
 * @package Patterns
 * @subpackage Builder
 * @category creational
 */
class Director
{
    /**
     * Property with concrete builder
     * @var Builder
     */
    private $builder;
    /**
     * Class constructor
     * @param Builder $builder instance of concrete builder
     * @return void
     */
    public function __construct(Buildeable $builder)
    {
        $this->builder = $builder;
    }
    /**
     * Calls concrete's builder methods
     * @return void
     */
    public function create()
    {
        $this->builder->buildPartOne();
        $this->builder->buildPartTwo();
    }
    /**
     * Returns final product
     * @return Product final product instance
     */
    public function getProduct()
    {
        return $this->builder->getProduct();
    }
}