<?php

/**
 * Generate a Password Test
 */

require dirname(dirname(__FILE__)).'/vendor/autoload.php';

use \generatePassword\GeneratePassword;

$gp = new GeneratePassword(12, 1, 1, 0);
echo $gp->make().PHP_EOL;