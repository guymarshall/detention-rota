<?php

class Teacher
{
    public function __construct(private TimetableType $type, private array $users)
    {

    }
}