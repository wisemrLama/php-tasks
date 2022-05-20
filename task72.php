<?php

const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp) {
    $currentYear = ($timestamp / SECONDS_IN_YEAR) + 1970;
    floor($currentYear);
    return (int)$currentYear;
}