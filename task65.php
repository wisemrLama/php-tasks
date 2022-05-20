<?php

function filterString($str, $char) {
    $i = 0;
    $result = '';
    while($i < strlen($str)) {
        if($str[$i] !== $char) {
            $result = "{$result}{$str[$i]}";
        }
        $i += 1;
    }
    return $result;
}