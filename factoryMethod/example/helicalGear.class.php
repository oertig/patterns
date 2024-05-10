<?php
namespace factoryMethodExample;

class HelicalGear implements Gear {
    private int $toothAngleDegree;

    public function __construct(int $toothAngleDegree = 0) {
        $this->toothAngleDegree = $toothAngleDegree;
    }

    public function startSpinning(): void {
        echo "start spinning helical gear with tooth angle of ".$this->toothAngleDegree." degree<br>\n";
    }

    public function stopSpinning(): void {
        echo "stop spinning helical gear<br>\n";
    }
}

?>
