<?php
namespace factoryMethodBase;

class ConcreteProductA implements Product {
    public function operation(): string {
        return "Result of ConcreateProductA<br>\n";
    }
}
?>