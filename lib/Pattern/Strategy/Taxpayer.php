<?php
namespace Pattern\Strategy;
/**
 * Taxpayer class
 * @package Patterns
 * @subpackage Strategy
 * @category behavioral
 */
class Taxpayer
{
    /**
     * Income
     * @var float
     */
    private $income;
    /**
     * Class constructor
     * @param float $income current income
     * @return void
     */
    public function __construct($income)
    {
        $this->income = $income;
    }
    /**
     * Pays a tax
     * @param object $strategy strategy of tax calculation
     * @return float
     */
    public function payTax($strategy)
    {
        return $strategy->calculate($this->income);
    }
}
