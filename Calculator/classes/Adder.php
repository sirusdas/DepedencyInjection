<?php
class Adder implements OperatorInterface{
	public $isFirst = false;
	
	public function run($number, $result){
		return $result + $number;
	}
	
	public function setFirst($isFirst){
		$this->isFirst = $isFirst;
	}
	
}