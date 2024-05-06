<?php
namespace Singleton;

Class Singleton {
    private static Singleton $instance;

    private function __construct() {
        // private constructor to prevent instantiation
    }

    public static function getInstance(): Singleton {
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function callableMethod(): void {
        // a method that does something to justify the existence of this class
    }
}
?>