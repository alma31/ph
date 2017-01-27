<?php


use PHPUnit\Framework\TestCase;


class RoverTest extends TestCase {

	public function testRoverMove(){
		$rover = new Rover();
		$rover->forward();
		$this->assertEquals(
			0, 
			$rover->x
			);
		$this->assertEquals(
			0,
			$rover->y 
			);
		
	}

	
}
