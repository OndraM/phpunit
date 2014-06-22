--TEST--
phpunit EmptyTestCaseTest ../_files/EmptyTestCaseTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'EmptyTestCaseTest';
$_SERVER['argv'][3] = dirname(dirname(__FILE__)) . '/_files/EmptyTestCaseTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
   ___  __ _____  __  __     _ __
  / _ \/ // / _ \/ / / /__  (_) /_
 / ___/ _  / ___/ /_/ / _ \/ / __/
/_/  /_//_/_/   \____/_//_/_/\__/

PHPUnit %s by Sebastian Bergmann.

F

Time: %s, Memory: %sMb

There was 1 failure:

1) Warning
No tests found in class "EmptyTestCaseTest".

FAILURES!
Tests: 1, Assertions: 0, Failures: 1.
