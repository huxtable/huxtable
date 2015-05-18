<?php

use Huxtable\Command;

/*
 * Instances of Huxtable\Command added to the $commands array
 *   will be registered automatically
 */

$example = new Command('example', 'An example command', function($required, $optional='')
{
	echo 'This is an example command.' . PHP_EOL;

	var_dump( $this->isSetOption( 'a' ) );
	var_dump( $this->isSetOption( 'b' ) );
	var_dump( $this->isSetOption( 'word' ) );

	echo "required: {$required}" . PHP_EOL;
	echo "optional: {$optional}" . PHP_EOL;
});

$example->registerOption('a');
$example->registerOption('b');
$example->registerOption('word');

// $commands[] = $example;

?>
