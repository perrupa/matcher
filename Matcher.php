<?php
namespace Matcher;

class ArrayMatcher {
	function __construct( $subject ) {
		$this->subject = $subject;
	}

	public function hasProperty($value='')
	{
		return array_key_exists( $value, $this->subject );
	}
}