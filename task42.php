<?php

function truncate($str, $chars) {
    $result = substr($str, 0, $chars);
    return ($result . "...");
  };
  truncate("Hexlet", 3);