<?php
declare(strict_types=1);

require_once'observable.interface.php';
require_once'observer.interface.php';
require_once'observable.class.php';
require_once'observer.class.php';

use ObserverPattern\ObservableInterface;
use ObserverPattern\ObserverInterface;
use ObserverPattern\Observable;
use ObserverPattern\Observer;

$observable = new Observable();
$observer = new Observer();

$observable->attach($observer);
$observable->setValue(1); // $observable now notifies $observer that a change has occurred

for ($i = 0; $i < 10; $i++) {
    $observable->setValue(rand(0, 100));
}
?>