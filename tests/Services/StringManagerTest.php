<?php


namespace Services;

use stdClass;
use SwitchViews\facades\Str;

test('isString should return false on passing empty array', function () {
    $result = Str::isString([]);

    assertFalse($result);
});

test('isString should return false on passing array with elements', function () {
    $result = Str::isString([1, 2, 3]);

    assertFalse($result);
});

test('isString should return true on passing string', function () {
    $result = Str::isString('Switch');

    assertTrue($result);
});

test('isString should return false on passing integer', function () {
    $result = Str::isString(1234);

    assertFalse($result);
});

test('isString should return false on passing object', function () {
    $obj = new stdClass();
    $result = Str::isString($obj);

    assertFalse($result);
});
