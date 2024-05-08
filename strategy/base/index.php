<?php
declare(strict_types=1);

require_once 'context.class.php';
require_once 'strategyA.class.php';
require_once 'strategyB.class.php';

use Strategy\Context;
use Strategy\StrategyA;
use Strategy\StrategyB;

// run code with strategyA
$context = new Context(new StrategyA());
$context->executeStrategy('string from StrategyA');

//switch to strategyB (only as an example, don't do this in production code)
$context->setStrategy(new StrategyB());
$context->executeStrategy(5);
?>