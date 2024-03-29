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

function getCorrectAnswer(array $data)
{
    [$first, $second] = $data;

    $min = $first < $second ? $first : $second;

    for ($i = $min; $i > 0; $i--) {
        if ($first % $i == 0 && $second % $i == 0) {
            return $i;
        }
    }

    return 1;
}

function getDataString(array $data)
{
    return implode(' ', $data);
}
