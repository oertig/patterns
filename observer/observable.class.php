<?php
namespace ObserverPattern;

Class Observable implements ObservableInterface {
    private array $observers = [];
    private int $value;

    public function attach(Observer $observer): void {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void {
        unset($this->observers[array_search($observer, $this->observers)]);
    }

    public function notify(): void {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setValue(int $value): void {
        $this->value = $value;
        $this->notify();
    }

    public function getValue(): int {
        return $this->value;
    }
}
?>