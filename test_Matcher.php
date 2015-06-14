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
        $this->assertTrue(
            $m->hasProperty("name"),
            'verifies a property exists.');
        $this->assertFalse(
            $m->hasProperty("SIN#"),
            'verifies a property does not exist.');
    }

    function test_hasProperties() {
        $m = new ArrayMatcher( $this->little_girl );
        $this->assertTrue(
            $m->hasProperties(["name", "age"]),
            'verifies a property exists.');
        $this->assertFalse(
            $m->hasProperties(["name", "SIN#"]),
            'verifies a property does not exist.');
    }

    function test_hasValue() {
        $m = new ArrayMatcher( $this->little_girl );
        $this->assertTrue(
            $m->hasValue("name", "Suzanna"),
            'verifies a property\'s value is the same.');
        $this->assertFalse(
            $m->hasValue("name", "Bobby"),
            'verifies a property\'s value is not the same.');
    }

    function test_hasValues() {
        $m = new ArrayMatcher( $this->little_girl );

        $this->assertTrue(
            $m->hasValues(["name" =>  "Suzanna"]),
            'verifies a property\'s single value is the same.');
        $this->assertFalse(
            $m->hasValues(["name" =>  "Bobby"]),
            'verifies a property\'s single value is not the same.');

        $this->assertTrue(
            $m->hasValues([
                "name" =>  "Suzanna",
                "age"  => 12
            ]),
            'verifies a property\'s multiple values are the same.');
        $this->assertFalse(
            $m->hasValues([
                "name" =>  "Bobby",
                "age"  => 12
            ]),
            'verifies a property\'s multiple values are not the same.');
    }

}

