<?php
namespace ObserverBase;

interface ObservableInterface {
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;
}

?>