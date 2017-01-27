<?php


use PHPUnit\Framework\TestCase;


class RoverTest extends TestCase {

	public function testRoverInit(){
		$rover = new Rover(18,32,"S");
		$this->assertEquals(32, $rover->y);
		$this->assertEquals(18, $rover->x);
		$this->assertEquals("S", $rover->direction);

	}

	public function testRoverForward(){
		$rover = new Rover(0,0, "N");
		$rover->forward();
		$this->assertEquals(1,$rover->y);
		$this->assertEquals(0,$rover->x);
	}


	public function testRoverEst(){
		$rover = new Rover(5,5,"E");
		$rover->forward();
		$this->assertEquals(5,$rover->y);
		$this->assertEquals(6,$rover->x);
	}

	public function testRoverSud(){
		$rover = new Rover(5,5,"S");
		$rover->forward();
		$this->assertEquals(4,$rover->y);
		$this->assertEquals(5,$rover->x);
	}

	public function testRoverOuest(){
		$rover = new Rover(5,5,"O");
		$rover->forward();
		$this->assertEquals(5,$rover->y);
		$this->assertEquals(4,$rover->x);
	}

	public function testRoverAutres(){
		$rover = new Rover (5,5,"O");
		$rover->forward();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(4, $rover->x);

	}

	public function testLeftNord(){
		$rover = new Rover(5,5,"N");
		$rover->left();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(5, $rover->x);
		$this->assertEquals("O",$rover->direction);
	}

	public function testLeftOuest(){
		$rover = new Rover(5,5,"O");
		$rover->left();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(5, $rover->x);
		$this->assertEquals("S", $rover->direction);
	}

	public function testLeftSud(){
		$rover = new Rover(5,5,"S");
		$rover->left();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(5, $rover->x);
		$this->assertEquals("E", $rover->direction);
	}

	public function testLeftEst(){
		$rover = new Rover (5,5,"E");
		$rover->left();
		$this->assertEquals(5,$rover->y);
		$this->assertEquals(5, $rover->x);
		$this->assertEquals("N", $rover->direction);
	}

	public function testRightNord(){
		$rover = new Rover (5,5,"N");
		$rover->right();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(5, $rover->x);
		$this->assertEquals("E", $rover->direction);
	}

	public function testRightEst(){
		$rover = new Rover (5,5,"E");
		$rover->right();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(5, $rover->x);
		$this->assertEquals("S", $rover->direction);
	}

	public function testRightSud(){
		$rover = new Rover (5,5,"S");
		$rover->right();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(5, $rover->x);
		$this->assertEquals("O", $rover->direction);
	}

	public function testRightOuest(){
		$rover = new Rover (5,5,"O");
		$rover->right();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(5, $rover->x);
		$this->assertEquals("N", $rover->direction);
	}


	public function testbackwardNord(){
		$rover = new Rover(5,5,"N");
		$rover->backward();
		$this->assertEquals(4, $rover->y);
		$this->assertEquals(5, $rover->x);
	}

	public function testbackwardEst(){
		$rover = new Rover(5,5,"E");
		$rover->backward();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(4, $rover->x);
	}

	public function testbackwardSud(){
		$rover = new Rover(5,5,"S" );
		$rover->backward();
		$this->assertEquals(6, $rover->y);
		$this->assertEquals(5, $rover->x);
	}
	public function testbackwardOuest(){
		$rover = new Rover(5,5,"O");
		$rover->backward();
		$this->assertEquals(5, $rover->y);
		$this->assertEquals(6, $rover->x);
	}

	
}
