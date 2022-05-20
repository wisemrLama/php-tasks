<?php

function generateAmount($amountOfGoods, $costOfAudit) {
    return $amountOfGoods ?: $costOfAudit * 3;
}