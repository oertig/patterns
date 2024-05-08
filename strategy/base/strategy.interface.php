<?php
namespace Strategy;

interface Strategy {
    public function executeStrategy(mixed $input): mixed;
}

?>