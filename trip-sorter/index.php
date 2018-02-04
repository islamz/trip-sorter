<?php

require_once 'cardsSorter.php';

$boardings[] = array('from' 	=> 'Stockholm',
					'to'   		=> 'New York JFK',
					'flight'   	=> 'SK22',
					'gate'   	=> '22',
					'seat'   	=> '7B',
					'type'		=> 'plane',
					'notes' 	=> 'Baggage will we automatically transferred from your last leg'
					);
$boardings[] = array('from' 	=> 'Barcelona',
					'to'   		=> 'Gerona Airport',
					'type'		=> 'bus'
					);
$boardings[] = array('from' 	=> 'Madrid',
					'to'   		=> 'Barcelona',
					'trip'   	=> '78A',
					'seat'   	=> '45B',
					'type'		=> 'train'
					);
$boardings[] = array('from' 	=> 'Gerona Airport',
					'to'   		=> 'Stockholm',
					'flight'   	=> 'SK455',
					'gate'   	=> '45B',
					'seat'   	=> '3A',
					'type'		=> 'plane',
					'notes'     => 'Baggage drop at ticket counter 344'
					);

// initialize object
$trip = new cardsSorter($boardings, 'Madrid');