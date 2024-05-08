<?php
namespace ObserverBase;

interface ObserverInterface { // also called Subject (SubjectInterface)
    public function update(ObservableInterface $observable) : void;
}

?>