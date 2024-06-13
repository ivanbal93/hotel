<?php

function getRentPrice(int $guestsAmount): array
{
    $three = [
        "Июнь: 3 000 руб./сутки",
        "Июль: 3 500 руб./сутки",
        "Август: 3 500 руб./сутки"
    ];
    $four = [
        "Июнь: 3 500 руб./сутки",
        "Июль: 4 000 руб./сутки",
        "Август: 4 000 руб./сутки"
    ];

    return $guestsAmount == 3 ? $three : $four;
}