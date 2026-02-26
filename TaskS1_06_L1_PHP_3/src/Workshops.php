<?php
declare(strict_types=1);

class Workshops extends Events{


#[\Override]
public function __toString(): string {
    return "The workshop: " . $this->name . " will last:  " . $this->duration . " minutes & will take place on: " . $this->date . ".";
}
}
