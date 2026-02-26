<?php
declare(strict_types=1);

trait Turbo {
    public function boost(): string {
        return "Boost activated." ;
    }
}


enum FuelType : string {
    case Diesel = "diesel";
    case Gasoline = "gasoline";
    case Electric = "electric";
    case FlintStones = "feet";
}
class Car{ use Turbo;

private FuelType $fuel;
private string $brand;
private string $plate;
private int $maxSpeed;

function __construct(FuelType $fuel, string $brand, string $plate, int $maxSpeed){
    if ($maxSpeed <0){throw new InvalidArgumentException("Speed can not be negative");}
    if (trim($plate) == ""){throw new InvalidArgumentException("Plate can not be empty");}
    if (trim($brand) == ""){throw new InvalidArgumentException("brand can not be empty");}

    $this->fuel = $fuel;
    $this->brand = $brand;
    $this->plate = $plate;
    $this->maxSpeed = $maxSpeed;
}

public function __toString(){
    return "This is a " . $this->brand . " car with plate " . $this->plate.  " that runs on " . 
    $this->fuel->value . " . It can not go beyond " . $this->maxSpeed . " km/h unless you got turbo.";
}


}