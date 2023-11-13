<?php

class GumballMachine {

	private $gumballs;
	
	public function getGumballs() {
		return $this->gumballs;
	}
	
	public function setGumballs($amount) {
		$this->gumballs = $amount;
	}
	
	// without bug
	public function turnWheel() {
		$this->setGumballs($this->getGumballs()-1);
	}

	// with bug
	// public function turnWheel() {
	// 	$this->setGumballs($this->getGumballs()-2);
	// }
}
