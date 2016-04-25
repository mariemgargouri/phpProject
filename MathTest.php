<?php
class MathTest extends PHPUnit_Framework_TestCase
{
	public function setUp(){
		require_once 'class.math.php';
	}
	public function testIsValidWithValid(){
		return $this->assertEquals(Admin::isValid("admin"),true);
	}
	public function testIsValidWithNoValid(){
		return $this->assertEquals(Admin::isValid("ad"),false);
	}
}
?>