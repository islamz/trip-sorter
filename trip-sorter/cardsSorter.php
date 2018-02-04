<?php
require_once __DIR__ . '/vendor/autoload.php';

use Transportations\Bus;
use Transportations\Train;
use Transportations\Plane;
use Transportations\AbstractTransportations;

class cardsSorter{

	protected $currentCity;

	protected $boardings 	= array();
    protected $sortedTrip 	= '';
    public $destenation;

    public function __construct($boardings, $city)
    {
        $this->boardings = $boardings;
        $this->currentCity = $city;

        $this->getFirstTrip();
    }

	//get Transpotaion msg
    private function getFirstTrip()
    {
    	
    	foreach ($this->boardings as $key => $boarding) {

    		if(ucwords($boarding['from']) == ucwords($this->currentCity)){
    			$className = 'Transportations\\'.ucwords($boarding['type']);

    			$obj = new $className($boarding);
    			$msg = $obj->getMessage();
    			$this->sortedTrip .= $msg;
    			unset($this->boardings[$key]);

    			$this->destenation = $boarding['to'];

    			return $this->sortBoardings();
    		}
    	}
    }

    private function sortBoardings(){
    	foreach ($this->boardings as $key => $boarding) {
    		if($this->destenation == $boarding['from']){

    			$className = 'Transportations\\'.ucwords($boarding['type']);

    			$obj = new $className($boarding);
    			$msg = $obj->getMessage();

    			$this->sortedTrip .= $msg;
    			$this->destenation = $boarding['to'];
    			
				unset($this->boardings[$key]);
    		}
    	}

    	$lastTrip = $this->boardings[0];
    	$className = 'Transportations\\'.ucwords($lastTrip['type']);

		$obj = new $className($lastTrip);
		$msg = $obj->getMessage();

		$this->sortedTrip .= $msg;

    	echo "<pre>";print_r($this->sortedTrip);die;
    }

    
}