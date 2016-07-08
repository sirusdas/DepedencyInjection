<?php
class Divider implements OperatorInterface{
	public $isFirst = false;
	
	public function run($number, $result){
		if($this->isFirst == true){ $number = 1 ; }
		return $result / $number;
	}
	
	public function setFirst($isFirst){
		$this->isFirst = $isFirst;
	}
}
?>