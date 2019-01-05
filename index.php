<?php
require __DIR__ . '/vendor/autoload.php';

/**
 * using psr-4 convention
 */
use Animals\Domestics\Lamb;

$lamb = new Lamb;
$lamb->intro();

echo '<br>';

/**
 * using classmap
 */
$zookeeper = new ZooKeeper;
$zookeeper->intro();

echo '<br>';

/**
 * using files
 */

open();