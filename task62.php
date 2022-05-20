<?php

function countChars($str, $char) {
    $i = 0;
    $count = 0;
    $lowCaseStr = strtolower($str);
    $lowCaseChar = strtolower($char);
    while ($i < strlen($lowCaseStr)) {
        if ($lowCaseStr[$i] === $lowCaseChar) {
            $count = $count + 1;
        }
        $i = $i + 1;
    }

    return $count;
}