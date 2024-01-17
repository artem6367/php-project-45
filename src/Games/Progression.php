<?php

namespace BrainGames\Games\Progression;


function run()
{
    $rules = 'What number is missing in the progression?';
    \BrainGames\Engine\start(
        $rules,
        __NAMESPACE__ . '\getData',
        __NAMESPACE__ . '\getCorrectAnswer',
        __NAMESPACE__ . '\getDataString'
    );
}

function getData()
{
    $count = 10;
    $start = random_int(0, 100);
    $progression = [$start];
    $dif = random_int(2, 5);
    $operations = [
        fn ($num) => $num + $dif,
        fn ($num) => $num - $dif,
    ];
    $operation = $operations[random_int(0, 1)];

    for ($i = 1; $i < $count; $i++) {
        $prev = $progression[$i - 1];
        $next = $operation($prev);
        $progression[] = $next;
    }

    $index = random_int(0, $count - 1);
    $correctAnswer = $progression[$index];
    $progression[$index] = '..';

    return [$correctAnswer, $progression];
}

function getCorrectAnswer($data)
{
    return $data[0];
}

function getDataString($data)
{
    return implode(' ', $data[1]);
}
