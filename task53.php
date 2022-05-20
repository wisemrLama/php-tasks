<?php

function normalizeUrl($address) {
    $unsafeAddress = "http://";
    $safeAddress = "https://";
    if(substr($address, 0, 7) === $unsafeAddress) {
      return str_replace($unsafeAddress, $safeAddress, $address);
    } else {
    return $safeAddress . $address;
    }
}