<?php
class Calculator{
protected $result;
protected  $operation;

	public function setOperation(OperatorInterface $operation){
		
		$this->operation = $operation;
		
	}
	
	public function calculate(){
		
		foreach (func_get_args() as $number){
		/* 	if($this->operation->isFirst == false){ */
				$this->result = $this->operation->run($number, $this->result); //result + number
/* 			}else{
				$this->operation->setFirst(true);
				$this->result = $this->operation->run($this->result, $number ); //number + result
				$this->operation->setFirst(false);
			} */
		}
		
/* 		if($this->operation->isFirst == true){
			
		} */
		
	}
	
	public function getResult(){
		echo 'Result = ' . $this->result;
	}
	
/* 	public function setFirst($isFirst){
		$this->operation->isFirst = $isFirst;
	}
	 */
}
?>