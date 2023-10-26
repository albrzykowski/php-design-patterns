<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

use Pattern\Visitor\Visitor,
    Pattern\Visitor\Visitee,
    Pattern\Visitor\Employee,
    Pattern\Visitor\Bonus,
    Pattern\Visitor\AnnualLeave;

$seniorEmployee = new Employee(5000, 10);
$juniorEmployee = new Employee(2200, 3);

$seniorEmployee->accept(new Bonus());
$seniorEmployee->accept(new AnnualLeave());

$juniorEmployee->accept(new Bonus());
$juniorEmployee->accept(new AnnualLeave());

echo "Senior: \r\n";
echo "\t" . $seniorEmployee->getIncome() . "\r\n";
echo "\t" . $seniorEmployee->getAnnualLeave() . "\r\n";

echo "Junior: \r\n";
echo "\t" . $juniorEmployee->getIncome() . "\r\n";
echo "\t" . $juniorEmployee->getAnnualLeave() . "\r\n";