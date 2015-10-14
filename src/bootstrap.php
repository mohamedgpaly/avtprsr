<?php

require_once '../vendor/autoload.php';

$loader = new \Composer\Autoload\ClassLoader();
$loader->addPsr4('Prsr\\', __DIR__);
$loader->register();

