<?php

namespace Transportations;

class Plane extends AbstractTransportations{

	public function __construct($boarding){
		$this->from = $boarding['from'];
		$this->to 	 = $boarding['to'];
		$this->flight = $boarding['flight'];
		$this->seat = $boarding['seat'];
		$this->gate = $boarding['gate'];
		$this->notes = $boarding['notes'];

	}

	public function getMessage(){
		return 'From '.$this->from.' take flight '.$this->flight.' to '.$this->to.'. Gate '.$this->gate.' seat '.$this->seat.' Baggage drop at ticket counter '.$this->notes."<br />";
	}
}
