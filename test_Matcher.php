<?php
include 'Matcher.php';
use \Matcher\ArrayMatcher as ArrayMatcher;

class test_ArrayMatcher extends PHPUnit_Framework_TestCase {

	function setUp () {
		$this->little_girl = [
			"name" => "Suzanna",
			"age"  => 12
		];
	}

	function test_hasProperty() {
		$m = new ArrayMatcher( $this->little_girl );
		$this->assertTrue( $m->hasProperty("name"), 'verifies a property exists.' );
	}

}