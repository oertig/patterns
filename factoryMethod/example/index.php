<?php
declare(strict_types=1);

require_once 'vehicle.class.php';
require_once 'boat.class.php';
require_once 'car.class.php';
require_once 'plane.class.php';

use FactoryMethodExample\Vehicle;
use FactoryMethodExample\Boat;
use FactoryMethodExample\Car;
use FactoryMethodExample\Plane;

function travelByVehicle(Vehicle $vehicle) {
    echo "I am traveling by ".$vehicle->getVehicleName().".<br>\n";
    $vehicle->moveWithVehicle();
    echo "I have arrived.<br>\n<br>\n";
}

travelByVehicle(new Boat());
travelByVehicle(new Car());
travelByVehicle(new Plane());
?>