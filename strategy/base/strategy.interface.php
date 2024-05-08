<?php
namespace StrategyBase;

interface Strategy {
    public function executeStrategy(mixed $input): mixed;
}

?>