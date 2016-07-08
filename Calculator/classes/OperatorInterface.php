<?php
interface OperatorInterface{
	//public  $isFirst;
	public function run($number, $result);
	public function setFirst($isFirst);
}