<?php

interface Enrollable
{
};

class Chris implements Enrollable
{
    public $name = 'Chris';
}

class UniversityOfEdinburgh implements Enrollable
{
    public $name = 'University of Edinburgh';
}

function enroll(Enrollable $enrollee, Enrollable $premises)
{
    echo $enrollee->name . ' is being enrolled at ' . $premises->name;
}

$chris = new Chris();
$edinburgh = new UniversityOfEdinburgh();

enroll($chris, $edinburgh);
