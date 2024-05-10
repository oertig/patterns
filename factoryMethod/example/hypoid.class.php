<?php
namespace factoryMethodExample;

class HypoidGear implements Gear {
    private int $axisOffsetDegree;

    public function __construct(int $axisOffsetDegree = 0) {
        $this->axisOffsetDegree = $axisOffsetDegree;
    }

    public function startSpinning(): void {
        echo "start spinning hypoid gear with axis offset of ".$this->toothAngleDegree." degree<br>\n";
    }

    public function stopSpinning(): void {
        echo "stop spinning hypoid gear<br>\n";
    }
}

?>
