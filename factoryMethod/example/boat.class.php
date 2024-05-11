<?php
namespace factoryMethodExample;

class Boat extends Vehicle {
    private Vehicle $vehicle;

    public function buildVehicle(): void {
        $this->vehicle = new Boat();
    }

    public function move(): void {
        echo "The boat is moving.<br>\n";
    }

    public function getVehicleName(): string {
        return "boat";
    }

    public function moveWithVehicle(): void {
        $this->buildVehicle();
        $this->move();
    }
}
?>