<?php
namespace factoryMethodExample;

abstract class Vehicle {
    private Vehicle $vehicle;

    public abstract function buildVehicle(): void;
    public abstract function move(): void;
    public abstract function getVehicleName(): string;

    public function moveWithVehicle(): void {
        $this->buildVehicle();
        $this->move();
    }
}
?>