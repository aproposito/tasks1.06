<?php

declare(strict_types=1);

class Talks extends Events
{


    #[\Override]
    public function __toString(): string
    {
        return "The talk: " . $this->name . " will last:  " . $this->duration . "minutes & will take place on: " . $this->date . ".";
    }
}
