<?php
namespace ObserverPattern;

require_once'observer.interface.php';

Class Observer implements ObserverInterface {
    public function update(ObservableInterface $observable): void {
        echo "New Observer value: " . $observable->getValue() . "<br>\n";
    }
}
?>