<?php

function getHiddenCard($cardNumber, $starsAmount = 4) {
    $addStars = str_repeat("*", $starsAmount);
    $visibleNumbers = substr($cardNumber, -4);
    $result = $addStars . $visibleNumbers;
    return $result;
  }
  getHiddenCard("2034399002121100");