<?php

class dice
{
    public int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }
    public function launchDice()
    {
        return rand(1, 6);
    }
}
