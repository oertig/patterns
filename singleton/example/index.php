<?php
declare(strict_types=1);

require_once 'settings.class.php';

use SingletonExample\Settings;

$settings1 = Settings::getInstance();
$settings2 = Settings::getInstance();

$settings1->setLanguage('de');
print_r($settings2->getLanguage());
?>