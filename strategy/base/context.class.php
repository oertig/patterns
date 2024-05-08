<?php
namespace StrategyBase;

Class Context {
    private Strategy $strategy;

    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    // if we want to change the strategy after the object is created
    public function setStrategy(Strategy $strategy): void {
        $this->strategy = $strategy;
    }

    public function executeStrategy(mixed $input): mixed {
        // do something
        $result = $this->strategy->executeStrategy($input); // call the strategy
        print_r($result);
        return $result;
        // do more stuff
    }
}

?>