<?php


class Rover {
	public $x = 0;
	public $y = 0;
	public $direction = "N";
	
	
	
	public function __construct($x,$y,$direction){
		$this->x = $x;
		$this->y = $y;
		$this->direction = $direction;

	}

	public function forward(){
		if ($this->direction === "N") {
			$this->y = $this->y + 1;
		}elseif ($this->direction === "E") {
			$this->x = $this->x + 1;
		}elseif ($this->direction === "S"){
			$this->y = $this-> y - 1;
		}elseif ($this->direction === "O") {
			$this->x = $this->x -1;

		}
	}
	
	public function backward(){
		if ($this->direction === "N") {
			$this->y = $this->y - 1;
		}elseif ($this->direction === "E") {
			$this->x = $this->x - 1;
		}elseif ($this->direction === "S") {
			$this->y = $this-> y + 1;
		}elseif ($this->direction === "O") {
			$this->x = $this-> x + 1;
		}
		
	}

	public function left(){
		if ($this->direction === "N"){
			$this->direction = "O"; 
		}elseif ($this->direction === "O"){
			$this->direction = "S";
		}elseif ($this->direction === "S") {
			$this->direction = "E";
		}elseif ($this->direction === "E") {
			$this->direction = "N";
		}

	}

	public function right(){
		if ($this->direction === "N") {
			$this->direction = "E";
		}elseif ($this->direction === "E") {
			$this->direction = "S";
		}elseif ($this->direction === "S") {
			$this->direction = "O";
		}elseif ($this->direction === "O") {
			$this->direction = "N";
		}

		
	}

}


