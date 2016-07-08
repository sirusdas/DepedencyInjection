<?php

namespace ChestLock;
 
class Lock{
	
	protected $isLocked;
	
	public function lock(){
		
		$this->isLocked = true;
		
	}
	
	public function isLocked() {
		return $this->isLocked;
	}
	
}