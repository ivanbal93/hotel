<?php

function getTransferPrice(int $num): array
{
    $first = [
        "до 4 человек - 2000 руб.",
        "от 4 до 7 человек - 3000 руб."
    ];
    $second = [
        "до 4 человек - 3000 руб.",
        "от 4 до 7 человек - 4000 руб."
    ];

    return $num == 1 ? $first : $second;
}