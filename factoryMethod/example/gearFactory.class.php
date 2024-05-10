<?php
namespace factoryMethodExample;

abstract class GearFactory {
    private int $gearRadius;
    private int $amountTeeth;
    private array $gearTypes = ['bevel', 'worm', 'helical', 'hypoid'];
    private array $gearMaterials = ['steel', 'aluminum', 'carbon', 'plastic'];

    public function __construct(int $gearRadius = 0, int $amountTeeth = 0) {
        $this->gearRadius = $gearRadius;
        $this->amountTeeth = $amountTeeth;
    }
}
?>