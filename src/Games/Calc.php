<?php

namespace BrainGames\Games\Calc;

function run()
{
    \BrainGames\Engine\start(
        'What is the result of the expression?',
        __NAMESPACE__ . '\getData',
        __NAMESPACE__ . '\getCorrectAnswer',
        __NAMESPACE__ . '\getDataString'
    );
}

function getData()
{
    $operations = ['+', '-', '*'];
    $first = random_int(1, 99);
    $second = random_int(1, 99);
    $index = array_rand($operations);
    $operation = $operations[$index];

    return [$operation, $first, $second];
}

function getCorrectAnswer(array $data)
{
    [$operation, $first, $second] = $data;

    $correctAnswer = '';
    switch ($operation) {
        case '+':
            $correctAnswer = $first + $second;
            break;
        case '-':
            $correctAnswer = $first - $second;
            break;
        case '*':
            $correctAnswer = $first * $second;
            break;
    }
    return $correctAnswer;
}

function getDataString(array $data)
{
    [$operation, $first, $second] = $data;

    return "$first $operation $second";
}
