<?php 
declare(strict_types=1);
require '../src/Email.php';
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase{
	public function testCanBeCreatedFromValidEmailAdress() {

		$this->assertInstanceOf(
			Email::class,
			Email::fromString('user@example.com')

			);



	}

	public function testCannotBeCreatedFromValidEmailAdress() {

		$this->expectException(InvalidArgumentException::class);
		Email::fromString('Invalid');
	}
	public function testCanBeUsedAsString() {
		$this->assertEquals('user@example.com',
			Email::fromString('user@example.com')
			);
	}
}

?>