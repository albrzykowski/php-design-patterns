<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$query  = new Pattern\FluentInterface\Query();
$query->select(uniqid());
$query->where(uniqid());
$query->where(uniqid());
$query->orderBy(uniqid());
echo $query;


//$query  = new Pattern\FluentInterface\Query();
//$query->select(uniqid())
//    ->where(uniqid())
//    ->where(uniqid())
//    ->orderBy(uniqid());
//echo $query;