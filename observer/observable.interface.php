<?php
namespace ObserverPattern;

interface ObservableInterface {
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;
}

?>