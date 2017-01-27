<?php


class Rover {
	public $x=0;
	public $y=0;
	public $direction = "nord";
	public $destination = ["nord","est","sud","ouest"];
	
	
	

	public function __construct(){
	
	}

	public function forward(){
		if ($this->destination[0] == $this->y ) {
			return $this->y + 1;
		}

	}
	
	public function backward(){
		if ($this->destination[0] == $this->y ) {
			return $this->y - 1;
		}
	}

	public function left(){
		
	}

	public function right(){
		
	}

}


