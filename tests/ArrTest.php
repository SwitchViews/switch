<?php
use App\Helpers\Arr;

it('isArray function should return Array', function () {
  $result = Arr::isArray();

  assertEquals(true, $result);
});