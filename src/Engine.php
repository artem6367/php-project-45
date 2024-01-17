<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;


function start($rules, $getData, $getCorrectAnswer, $getDataString)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rules);
    $count = 3;
    for ($i = 0; $i < $count; $i++) {
        $data = $getData();
        $correctAnswer = $getCorrectAnswer($data);
        $dataString = $getDataString($data);
        line("Question: %s", $dataString);
        $answer = prompt("Your answer: ");

        if ($answer == $correctAnswer) {
            line('Correct!');
            if ($i == $count - 1) {
                line("Congratulations, %s!", $name);
            }
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }
}