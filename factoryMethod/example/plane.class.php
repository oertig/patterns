<?php
namespace factoryMethodExample;

class Plane extends Vehicle {
    private Vehicle $vehicle;

    public function buildVehicle(): void {
        $this->vehicle = new Plane();
    }

    public function move(): void {
        echo "The plane is moving.<br>\n";
    }

    public function getVehicleName(): string {
        return "plane";
    }

    public function moveWithVehicle(): void {
        $this->buildVehicle();
        $this->move();
    }
}
?>