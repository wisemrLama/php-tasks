<?php

function printNumbers($firstNumber) {
    $i = $firstNumber;
    while($i) {
      print_r($i);
      print_r("\n");
      $i = $i - 1;
    }
    print_r("finished!");
}