<?php
class Adder implements OperatorInterface{
/* 	public $isFirst = false; //skip for now */
	
	public function run($number, $result){
		return $result + $number;
	}
	
/* 	//skip this for now
	public function setFirst($isFirst){
		$this->isFirst = $isFirst;
	} */
	
}