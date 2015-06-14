<?php
namespace Matcher;

class ArrayMatcher {
  function __construct( $subject ) {
    $this->subject = $subject;
  }

  public function hasProperty($property='') {
    return array_key_exists( $property, $this->subject );
  }

  public function hasProperties($properties='') {
    $results = array_map(function($prop){
        return $this->hasProperty($prop);
      }, $properties);

    return array_search( false, $results ) === false;
  }

  public function hasValue( $key, $value ) {
    if( !$this->hasProperty($key) ) return false;
    return $this->subject[$key] === $value;
  }

  public function hasValues($keyValuePairs=[]) {
    $keys = array_keys($keyValuePairs);
    $values = array_values($keyValuePairs);

    $results = array_map(function($key, $value){
        return $this->hasValue( $key, $value );
      }, $keys, $values);

    return array_search( false, $results ) === false;
  }
}

function log($obj) {
  echo "\n" . print_r($obj, true);
}
