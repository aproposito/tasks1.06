<?php
declare(strict_types=1);

class Conferences extends Events {


#[\Override]
public function __toString(): string{
    return "The conference: " . $this->name . " will last:  " . $this->duration . " minutes & will take place on: " . $this->date . ".";
    }

}
