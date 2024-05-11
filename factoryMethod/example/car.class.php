<?php
namespace factoryMethodExample;

class Car extends Vehicle {
    private Vehicle $vehicle;

    public function buildVehicle(): void {
        $this->vehicle = new Car();
    }

    public function move(): void {
        echo "The car is moving.<br>\n";
    }

    public function getVehicleName(): string {
        // return $this->vehicle->getVehicleName();
        return "car";
    }

    public function moveWithVehicle(): void {
        $this->buildVehicle();
        $this->move();
    }
}
?>