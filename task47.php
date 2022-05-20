<?php

function isInternationalPhone($number) {
    $firstSymbol = $number[0];
    return $firstSymbol === "+";
}