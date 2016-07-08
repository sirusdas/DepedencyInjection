<?php
require 'init.php';

$c = new Calculator();
$c->setOperation(new Adder());
$c->calculate(5, 5);

/* $c->setOperation(new Multiplier());
$c->setFirst(true);
$c->calculate(5 , 3);

$c->setOperation(new Subtractor());
//$c->setFirst(true);
$c->calculate(5); */

/* $c->setOperation(new Divider());
$c->setFirst(true);
$c->calculate(15, 5);
 */
$c->getResult();

?>