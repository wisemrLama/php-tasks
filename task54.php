<?php

function whoIsThisHouseToStarks($familyName) {
    if($familyName === 'Karstark' || $familyName === 'Tully') {
        return 'friend';
    } elseif ($familyName === 'Lannister' || $familyName === 'Frey') {
        return 'enemy';
    } else {
        return 'neutral';
    }
}