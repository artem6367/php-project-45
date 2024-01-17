<?php

namespace BrainGames\Games\Even;

function run()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    \BrainGames\Engine\start(
        $rules,
        __NAMESPACE__ . '\getData',
        __NAMESPACE__ . '\getCorrectAnswer',
        __NAMESPACE__ . '\getDataString'
    );
}

function getData()
{
    return random_int(1, 99);
}

function getCorrectAnswer(int $data)
{
    return $data % 2 == 0 ? 'yes' : 'no';
}

function getDataString(int $data)
{
    return $data;
}
