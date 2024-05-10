<?php
declare(strict_types=1);

require_once 'creator.class.php';
require_once 'product.interface.php';
require_once 'concreteCreatorA.class.php';
require_once 'concreteCreatorB.class.php';
require_once 'concreteProductA.class.php';
require_once 'concreteProductB.class.php';

use FactoryMethodBase\Creator;
use FactoryMethodBase\ConcreteCreatorA;
use FactoryMethodBase\ConcreteCreatorB;

function clientCode(Creator $creator) {
    $product = $creator->factoryMethod()->operation();
    print_r($product);
}

clientCode(new ConcreteCreatorA());
clientCode(new ConcreteCreatorB());
?>