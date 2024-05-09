<?php
namespace factoryMethodBase;

class ConcreteCreatorA extends Creator {
    public function factoryMethod() : Product {
        return new ConcreteProductA();
    }
}
?>