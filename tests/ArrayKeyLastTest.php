<?php

use PHPUnit\Framework\TestCase;

class ArrayKeyLastTest extends TestCase {
  public function testArrayKeyLastDeclared() {
    $this->assertTrue(function_exists('array_key_last'));
  }

  /**
   * @dataProvider getArrayData
   *
   * @param $arr
   * @param $expected_return_value
   */
  public function testArrayReturnLastKey($arr, $expected_return_value) {
    $this->assertSame($expected_return_value, array_key_last($arr));
  }

  public function getArrayData() {
    return array(
      array(array(), null),
      array(array(1, 2, 3, 4), 3),
      array(array(1.5, 2.5, 3.3, 4), 3),
      array(array(1, 'key' => 'value', 3, 4), 2),
      array(array('key' => 'value', 3, 4), 1),
      array(array(3, 4, 'key' => 'value'), 'key'),
      array(array('key0' => 'value0', 'key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3'), 'key3'),
    );
  }
}
