<?php
include 'Matcher.php';
use \Matcher\Matcher as Matcher;

class test_Matcher extends PHPUnit_Framework_TestCase {

	function setUp () {
		$this->little_girl = [
			"name" => "Suzanna",
			"age"  => 12
		];
	}

	function test_hasProperty() {
		$m = new Matcher( $this->little_girl );
		$this->assertTrue( $m->hasProperty("name"), 'verifies a property exists.' );
	}

}