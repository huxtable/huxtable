<?php

use Huxtable\Command;

/*
 * Instances of Huxtable\Command added to the $commands array
 *   will be registered automatically
 */

$example = new Command('example', 'An example command', function($required, $optional='')
{
	echo 'This is an example command.' . PHP_EOL . PHP_EOL;

	echo 'OPTIONS' . PHP_EOL;

	echo '       -a   ' . ( $this->getOptionValue( 'a' ) ? 'true' : 'false' ) . PHP_EOL;
	echo '       -b   ' . ( $this->getOptionValue( 'b' ) ? 'true' : 'false' ) . PHP_EOL;
	echo '   --word   ' . ( $this->getOptionValue( 'word' ) ? 'true' : 'false' ) . PHP_EOL . PHP_EOL;

	echo 'ARGUMENTS' . PHP_EOL;

	echo '  required  ' . $required . PHP_EOL;
	echo '  optional  ' . $optional . PHP_EOL . PHP_EOL;

});

$example->registerOption('a');
$example->registerOption('b');
$example->registerOption('word');

// $commands[] = $example;
