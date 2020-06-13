<?php

use SwitchViews\facades\Arr;

test('isArray should return true on passing empty array', function () {
    $result = Arr::isArray([]);

    assertTrue($result);
});

test('isArray should return true on passing array with elements', function () {
    $result = Arr::isArray([1, 2, 3]);

    assertTrue($result);
});

test('isArray should return false on passing string', function () {
    $result = Arr::isArray('Switch');

    assertFalse($result);
});

test('isArray should return false on passing integer', function () {
    $result = Arr::isArray(1234);

    assertFalse($result);
});

test('isArray should return false on passing object', function () {
    $obj = new stdClass();
    $result = Arr::isArray($obj);

    assertFalse($result);
});