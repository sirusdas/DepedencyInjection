<?php
require_once 'classes/Calculator.php';
require_once 'classes/OperatorInterface.php';
require_once 'classes/Adder.php';
require_once 'classes/Subtractor.php';
require_once 'classes/Multiplier.php';
require_once 'classes/Divider.php';

$c = new Calculator();
/* $c->setOperation(new Adder());
$c->calculate(5, 5); */

/* $c->setOperation(new Multiplier());
$c->setFirst(true);
$c->calculate(5 , 3);

$c->setOperation(new Subtractor());
//$c->setFirst(true);
$c->calculate(5); */

$c->setOperation(new Divider());
$c->setFirst(true);
$c->calculate(15, 5);

$c->getResult();

?>