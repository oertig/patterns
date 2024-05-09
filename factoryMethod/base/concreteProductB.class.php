<?php
namespace factoryMethodBase;

class ConcreteProductB implements Product {
    public function operation(): string {
        return "Result of ConcreateProductB<br>\n";
    }
}
?>