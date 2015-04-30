<?php

use Huxtable\Command;

/*
 * Instances of Huxtable\Command added to the $commands array
 *   will be registered automatically
 */

$testArgs = new Command('test-args', 'Use for testing arguments', function($required, $optional='')
{
	var_dump($this->isSetOption('a'));
	print_r($this);
});
	$testArgs->registerOption('a');
	$testArgs->registerOption('b');
	$testArgs->registerOption('word');

$commands[] = $testArgs;

?>
