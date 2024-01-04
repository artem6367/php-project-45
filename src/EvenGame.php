<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $count = 3;
    for ($i = 0; $i < $count; $i++) {
        $random = random_int(1, 99);
        line("Question: %s", $random);
        $answer = prompt("Your answer: ");
        $correctAnswer = $random % 2 == 0 ? 'yes' : 'no';
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
