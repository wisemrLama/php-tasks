<?php

function startsWith($text, $substr) {
    if(mb_strpos($text, $substr) === 0) {
        return true;
    }
}