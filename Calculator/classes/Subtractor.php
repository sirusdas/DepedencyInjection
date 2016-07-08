<?php
class Subtractor implements OperatorInterface{
	public $isFirst = false;
	
	public function run($number, $result){
		echo 'Result = ' . $result . ' and Number = ' . $number . '<br>';
		
				return $result - $number;

	}
	
	public function setFirst($isFirst){
	    $this->isFirst = $isFirst;
	}
}
?>