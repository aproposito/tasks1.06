<?php
declare(strict_types=1);

class Workshops {

private string $name;
private int $duration;
private string $date;

public function __construct(string $name, int $duration, string $date){
    if(trim($name) === " "){
        throw new InvalidArgumentException("Workshop must have a name");
        }
   if($duration <= 0) {
    throw new InvalidArgumentException("Workshop must have a duration");
   }
   if (trim($date) ===" ") {
    throw new InvalidArgumentException("Workshop must have a date");
   }
   $this->name = $name;
   $this->duration = $duration;
   $this->date = $date;

}
public function __toString(): string {
    return "The workshop: " . $this->name . " will last:  " . $this->duration . " minutes & will take place on: " . $this->date . ".";
}
}
