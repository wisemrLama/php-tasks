<?php

function isArgumentsForSubstrCorrect($str, $index, $length) {
    if($length < 0 || $index < 0 || $index > (strlen($str) - 1) || ($length + $index) > strlen($str)) {
      return false;
    } else {
      return true;
    }
}