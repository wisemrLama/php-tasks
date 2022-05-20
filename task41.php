<?php

function getCurrentYear() {
    $today = date('Y-m-d');
    $year = substr($today, 0, 4);
    return $year;
  };