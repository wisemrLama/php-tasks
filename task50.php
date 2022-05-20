<?php

function isNeutralSoldier($colorArmour, $colorShield) {
    return $colorArmour !== 'red' && $colorShield === 'black';
}