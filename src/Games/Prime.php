<?php

namespace BrainGames\Games\Prime;


function run()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    \BrainGames\Engine\start(
        $rules,
        __NAMESPACE__ . '\getData',
        __NAMESPACE__ . '\getCorrectAnswer',
        __NAMESPACE__ . '\getDataString'
    );
}

function getData()
{
    return random_int(2, 1000);
}

function getCorrectAnswer($data)
{
    return gmp_prob_prime($data) == 2 ? 'yes' : 'no';
}

function getDataString($data)
{
    return $data;
}
