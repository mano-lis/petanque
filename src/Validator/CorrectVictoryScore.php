<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;


#[\Attribute()]
class CorrectVictoryScore extends Constraint
{
    public string $message1 = "High score of the match must be 13";

    public string $message2 = "Result can't be a draw";
}