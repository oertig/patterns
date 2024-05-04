<?php
namespace Strategy;

require_once 'strategy.interface.php';

Class StrategyA implements Strategy {
    public function executeStrategy(mixed $input): mixed {
        // do something concrete
        return 'input: ' . $input . "<br>\n";
    }
}

?>