<?php

function isPalindrome($word) {
    $wordToLower = strtolower($word);
      return strrev($wordToLower) === $wordToLower;
  }
  function isNotPalindrome($word) {
      return !isPalindrome($word);
  }