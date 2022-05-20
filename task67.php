<?php

function hasChar($str, $letter) {
    $i = 0;
    while($i < strlen($str)) {
        if($str[$i] === $letter) {
            return true;
        }
        $i++;
    }
    return false;
}