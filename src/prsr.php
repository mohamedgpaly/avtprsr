<?php

require_once __DIR__ . '/bootstrap.php';

$application = new \Symfony\Component\Console\Application();
$application->add(new \Prsr\Component\Command\Avito());
$application->run();
