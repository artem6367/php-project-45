<?php

namespace BrainGames\Games\Gcd;

function run()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    \BrainGames\Engine\start(
        $rules,
        __NAMESPACE__ . '\getData',
        __NAMESPACE__ . '\getCorrectAnswer',
        __NAMESPACE__ . '\getDataString'
    );
}

function getData()
{
    $first = random_int(1, 100);
    $second = random_int(1, 100);
    return [$first, $second];
}

function getCorrectAnswer($data)
{
    [$first, $second] = $data;

    $gcd = gmp_gcd($first, $second);
    return gmp_intval($gcd);
    return 1;
}

function getDataString($data)
{
    return implode(' ', $data);
}
