<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

$kernel = new \App\Kernel('dev', true);
$kernel->boot();
$container = $kernel->getContainer();

$entityManager = $container->get('doctrine')->getManager();

return ConsoleRunner::createHelperSet($entityManager);