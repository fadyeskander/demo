<?php
/**
* @conversDefault \Fadyeskander\demo\Hello
*/
class HelloTest extends \PHPUnit_Framework_TestCase
{
	protected $hello;
	public function setUp(){
		$this->hello = new \Fadyeskander\demo\Hello();
	}
	/**
	  * @convers ::world
	  */
	public function testworld(){
		$this->assertSame('world',$this->hello->world());		
	}
}
?>