<?php
namespace Pattern\Strategy;
/**
 * VatCalculator class
 * @package Patterns
 * @subpackage Strategy
 * @category behavioral
 */
class ExamptCalculator
{
    const TAX_AMOUNT   = 0;
    /**
     * Calculates tax
     * @param float $income current income
     * @return float
     */
    public static function calculate($income)
    {
        return $income * self::TAX_AMOUNT;
    }
}