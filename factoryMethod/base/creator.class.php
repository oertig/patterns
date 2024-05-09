<?php
namespace factoryMethodBase;

abstract class Creator {
    abstract public function factoryMethod() : Product;

    public function someOperation() : string {
        return $this->factoryMethod();
    }
}
?>