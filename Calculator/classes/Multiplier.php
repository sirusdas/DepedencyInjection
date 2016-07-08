<?php
class Multiplier implements OperatorInterface{
	public $isFirst = false;
	
	public function run($number, $result){
		if($this->isFirst == true){ $number = 1 ; }
			echo 'Result = ' . $result . ' and Number = ' . $number . '<br>';
			return $result * $number;
	}
	
	public function setFirst($isFirst){
		$this->isFirst = $isFirst;
	}
}
?>