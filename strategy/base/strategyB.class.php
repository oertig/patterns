<?php
namespace StrategyBase;

require_once 'strategy.interface.php';

Class StrategyB implements Strategy {
    public function executeStrategy(mixed $input): mixed {
        // do something concrete
        return ($input * 2) . "<br>\n";
    }
}

?>