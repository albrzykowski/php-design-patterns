<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$accountingOffice  = new Pattern\Command\AccountingOffice();
$accountingOffice->addCommand(
    new Pattern\Command\Payment()
);
echo $accountingOffice->payTax();