<?php

function mysubstr($str, $char) {
    $i = 0;
    $result = '';
    while($i < $char) {
      $result = "{$result}{$str[$i]}";
      $i = $i + 1;
    }
    return $result;
  }