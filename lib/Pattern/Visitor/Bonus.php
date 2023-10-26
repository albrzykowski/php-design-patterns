<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pattern\Visitor;

/**
 * Description of Bonus
 *
 * @author oem
 */
class Bonus implements Visitor {
    public function visitEmployee(Employee $employee) {
        if ($employee->getSeniority() > 10) {
            $employee->setIncome($employee->getIncome() * 1.2);
        } else {
            $employee->setIncome($employee->getIncome() * 1.1);
        }
    }
}
