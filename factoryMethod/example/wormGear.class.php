<?php
namespace factoryMethodExample;

class WormGear implements Gear {
    public function __construct() {
        // nothing special to do here
    }

    public function startSpinning(): void {
        echo "start spinning worm gear<br>\n";
    }

    public function stopSpinning(): void {
        echo "stop spinning worm gear<br>\n";
    }
}

?>
