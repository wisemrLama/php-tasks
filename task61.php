<?php

function printReversedWordBySymbol($word) {
    $i = 0;
    $reverse = strrev($word);
    while($i < strlen($reverse)) {
        print_r("{$reverse[$i]}\n");
        $i = $i + 1;
    }
}