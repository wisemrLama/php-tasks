<?php

function makeItFunny($str, $char) {
    $i = 0;
    $result = '';
    while($i < strlen($str)) {
      $chosenChar = $str[$i];
      if(($i + 1) % $char === 0) {
        $chosenChar = strtoupper($chosenChar);
      }
      $result = "{$result}{$chosenChar}";
      $i++;
    }
    return $result;
}