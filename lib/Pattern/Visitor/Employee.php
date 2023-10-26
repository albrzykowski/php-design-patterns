<?php
namespace Pattern\Visitor;
/**
 * RepositoryIterator class
 * @package Patterns
 * @subpackage Visitor
 * @category behavioral
 */
class Employee implements Visitee
{
    /**
     * Income
     * @var int
     */
    private $income;
    /**
     * Seniority
     * @var int
     */
    private $seniority;
    /**
     * Annual leave
     * @var int
     */
    private $annualLeave = 20;
    /**
     * Class constructor
     * @param int $income
     * @param int $seniority
     * @return void
     */
    public function __construct($income, $seniority)
    {
        $this->income = $income;
        $this->seniority = $seniority;
    }
    function getIncome() {
        return $this->income;
    }

    function getSeniority() {
        return $this->seniority;
    }

    function getAnnualLeave() {
        return $this->annualLeave;
    }

    function setIncome($income) {
        $this->income = $income;
        return $this;
    }

    function setSeniority($seniority) {
        $this->seniority = $seniority;
        return $this;
    }

    function setAnnualLeave($annualLeave) {
        $this->annualLeave = $annualLeave;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function accept(Visitor $visitor)
    {
        $visitor->visitEmployee($this);
    }
}
