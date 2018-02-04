<?php

namespace Transportations;

class Train extends AbstractTransportations{
	
	public function __construct($boarding){
		$this->from = $boarding['from'];
		$this->to 	 = $boarding['to'];
		$this->trip = $boarding['trip'];
		$this->seat = $boarding['seat'];
	}

	public function getMessage(){
		return 'Take train '.$this->trip.' From '.$this->from.' To '.$this->to.'. '.'Sit in seat '.$this->seat.''. PHP_EOL;
	}
}