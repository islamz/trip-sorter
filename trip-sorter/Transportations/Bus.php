<?php

namespace Transportations;

class Bus extends AbstractTransportations{

	public function __construct($boarding){
		$this->from = $boarding['from'];
		$this->to 	 = $boarding['to'];
	}

	public function getMessage(){
		return 'Take the airport bus from '.$this->from.' to '.$this->to.'. No seat assignment.'. PHP_EOL;
	}
}