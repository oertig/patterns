<?php
namespace factoryMethodExample;

class BevelGear implements Gear {
    public function __construct() {
        // nothing special to do here
    }

    public function startSpinning(): void {
        echo "start spinning bevel gear<br>\n";
    }

    public function stopSpinning(): void {
        echo "stop spinning bevel gear<br>\n";
    }
}

?>
