<?php
namespace factoryMethodBase;

class ConcreteCreatorB extends Creator {
    public function factoryMethod() : Product {
        return new ConcreteProductB();
    }
}
?>