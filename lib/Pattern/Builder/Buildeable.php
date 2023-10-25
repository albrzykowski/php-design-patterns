<?php
namespace Pattern\Builder;
/**
 * IBuildable interface
 * @package Patterns
 * @subpackage Builder
 * @category creational
 */
interface Buildeable
{
    /**
     * Builds something
     * @return void
     */
    public function buildPartOne();
    /**
     * Build something else
     * @return void
     */
    public function buildPartTwo();
}