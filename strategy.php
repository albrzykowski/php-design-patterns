<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$businessman  = new \Pattern\Strategy\Taxpayer(40578.23);
var_dump(
    $businessman->payTax(
        new \Pattern\Strategy\VatCalculator()
    )
);


$ngo  = new \Pattern\Strategy\Taxpayer(70581.75);
var_dump(
    $ngo->payTax(
        new \Pattern\Strategy\ExamptCalculator()
    )
);