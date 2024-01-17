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
    for ($i = $data - 1; $i > 1; $i--) {
        if ($data % $i == 0) {
            return 'no';
        }
    }

    return 'yes';
}

function getDataString($data)
{
    return $data;
}
