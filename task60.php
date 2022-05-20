<?php

function joinNumbersFromRange($start, $finish) {
    $i = $start;
    $result = '';
    while($i <= $finish) {
        $result = "{$result}{$i}";
        $i = $i + 1;
    }
    return $result;
}