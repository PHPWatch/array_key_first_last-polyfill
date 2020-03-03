<?php

use PHPUnit\Framework\TestCase;

class ArrayKeyFirstTest extends TestCase {
  public function testArrayKeyFirstDeclared() {
    $this->assertTrue(function_exists('array_key_first'));
  }

  /**
   * @dataProvider getArrayData
   *
   * @param $arr
   * @param $expected_return_value
   */
  public function testArrayReturnFirstKey($arr, $expected_return_value) {
    $this->assertSame($expected_return_value, array_key_first($arr));
  }

  public function getArrayData() {
    return array(
      array(array(), null),
      array(array(1, 2, 3, 4), 0),
      array(array(1.5, 2.5, 3.3, 4), 0),
      array(array(1, 'key' => 'value', 3, 4), 0),
      array(array('key' => 'value', 3, 4), 'key'),
      array(array(3, 4, 'key' => 'value'), 0),
      array(array('key0' => 'value0', 'key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3'), 'key0'),
    );
  }
}
