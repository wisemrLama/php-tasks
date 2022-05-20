<?php

function invertCase($text)
{
    // BEGIN (write your solution here)
    $result = '';
    for($i = 0; $i < mb_strlen($text, 'UTF-8'); $i++) {
        $char = mb_substr($text, $i, 1);
        if(mb_strtolower($char) !== $char) {
            $char = mb_strtolower($char);
        } else {
            $char = mb_strtoupper($char);
        }
        $result = "{$result}{$char}";
    }
    return $result;
    // END
}