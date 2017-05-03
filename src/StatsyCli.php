<?php

use Tms157\Statsy\Memory;
use Tms157\Statsy\Factories\MemoryFactory;
use League\CLImate\CLImate;

require __DIR__ . '/../vendor/autoload.php';

$memory  = new Memory(
    new MemoryFactory()
);
$climate = new CLImate();

$climate->whisper(  );
$climate->info( $memory->getUsed()->getMb() );
