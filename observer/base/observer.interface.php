<?php
namespace ObserverPattern;

interface ObserverInterface { // also called Subject (SubjectInterface)
    public function update(ObservableInterface $observable) : void;
}

?>