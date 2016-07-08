<?php

namespace Chestlock;

use ChestLock\Lock;

class Chest{
	
	protected $lock;
	protected $isClosed;
	
	
	public function __construct(Lock $lock){
		$this->lock = $lock;
	}
	
	public function close($lock = true) {
		
		if($lock === true){
			
			$this->lock->lock();
			
		}
		
		$this->isClosed = true;
		
		echo 'Closed';
		
	}
	
	public function open(){
		
		if($this->lock->isLocked()){
			
			$this->unlock();
			
		}
		
		$this->isClosed = false;
		
		echo 'Open';
		
	}
	
	public function unlock(){
		
		$this->isLocked = false;
		
	}
	
	public function isClosed(){
		
		return $this->isClosed();
		
	}
	
}