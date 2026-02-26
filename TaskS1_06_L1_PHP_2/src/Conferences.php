<?php
declare(strict_types=1);

class Conferences {

private string $name;
private int $duration;
private string $date;

public function __construct(string $name, int $duration, string $date){
    if(trim($name) === ""){throw new InvalidArgumentException("Conference must have a nanem");}
    if($duration <= 0) {throw new InvalidArgumentException("Conference must have duration");}
    if(trim($date) === ""){throw new InvalidArgumentException("Conferences must have a date");}
    $this->name = $name;
    $this->duration = $duration;
    $this->date = $date;

}
public function __toString(): string{
    return "The conference: " . $this->name . " will last:  " . $this->duration . " minutes & will take place on: " . $this->date . ".";
    }

}