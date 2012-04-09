<?php
namespace phannotation;

class PhannotationTest extends \PHPUnit_Framework_TestCase {

	public function testConstruct() {

		$uut = new Phannotation('examples\SomeClass');

	}

	public function testGetMethod() {

		$uut = new Phannotation('examples\SomeClass');
		$this->assertEquals('method1', $uut->method('method1')->name());
	}

	public function testGetConstructor() {
		$uut = new Phannotation('examples\SomeClass');
		$this->assertEquals('__construct', $uut->constructor()->name());
	}

	public function testAnnoationWhenSimpleString() {

		$uut = new Phannotation('examples\SomeClass');
		$this->assertEquals('value', $uut->method('method1')->annotation('single'));
	}

	public function testAnnoationWhenArray() {

		$uut = new Phannotation('examples\SomeClass');
		$this->assertEquals(array('v1','v2'), $uut->method('method1')->annotation('array'));
	}

	public function testAnnoationWhenObject() {

		$mock = new \stdClass();
		$mock->int = 1;
		$mock->string = 'foo';

		$uut = new Phannotation('examples\SomeClass');
		$this->assertEquals($mock, $uut->method('method1')->annotation('multiple'));
	}

	public function testAnnoationWhenNoValue() {

		$uut = new Phannotation('examples\SomeClass');
		$this->assertEquals(null, $uut->method('method1')->annotation('without'));
	}

	public function testHas() {

		$uut = new Phannotation('examples\SomeClass');

		$method = $uut->method('method1');
		$this->assertTrue($method->has('single'));
		$this->assertTrue($method->has('array'));
		$this->assertTrue($method->has('multiple'));
		$this->assertTrue($method->has('without'));

		$this->assertFalse($method->has('NOT'));

	}

	public function testAnnotations() {

		$uut = new Phannotation('examples\SomeClass');
		$this->assertEquals(4, count($uut->method('method1')->annotations()));
	}


}

?>