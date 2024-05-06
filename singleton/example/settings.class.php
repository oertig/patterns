<?php
namespace SingletonExample;

Class Settings {
    private static Settings $instance;
    private string $language;
    private array $supportedLanguages = ['en', 'de'];
    private string $unitSystem;
    private array $supportedUnitSystems = ['metric', 'imperial'];

    private function __construct() {
        // private constructor to prevent instantiation
        $this->language = $this->supportedLanguages[0];
        $this->unitSystem = $this->supportedUnitSystems[0];
    }

    public static function getInstance(): Settings {
        if (!isset(self::$instance)) {
            self::$instance = new Settings();
        }

        return self::$instance;
    }

    public function setLanguage(string $language): void {
        if (!in_array($language, $this->supportedLanguages)) {
            throw new \InvalidArgumentException('Invalid language.');
        }

        $this->language = $language;
        // change the language of the whole application here
    }

    public function getLanguage(): string {
        return $this->language;
    }

    public function setUnitSystem(string $unitSystem = 'metric'): void {
        if (!in_array($unitSystem, $this->supportedUnitSystems)) {
            throw new \InvalidArgumentException('Invalid unitSystem.');
        }

        $this->unitSystem = $unitSystem;
        // change the units of the whole application here
    }

    public function getUnitSystem(): string {
        return $this->unitSystem;
    }
}
?>