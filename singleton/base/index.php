<?php
declare(strict_types=1);

require_once 'singleton.class.php';

use Singleton\Singleton;

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if($singleton1 === $singleton2) {
    echo 'Singleton works, both variables contain the same instance.';
} else {
    echo 'Singleton failed, variables contain different instances.';
}

?>