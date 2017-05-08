<?php

namespace Robert430404\StatsyCli\Memory;

use League\CLImate\CLImate;
use Robert430404\StatsyCli\Contacts\Command;

/**
 * Class ListMemory
 *
 * @package Robert430404\StatsyCli\Memory
 */
class ListMemory implements Command
{
    /**
     * @var CLImate
     */
    private $climate;

    /**
     * ListCommands constructor.
     *
     * Creates the environment for the command to run. In this case it's associating an instance of CLImate to the
     * property inside of the object.
     */
    public function __construct()
    {
        $this->climate = new CLImate();
    }

    /**
     * Runs the command
     *
     * This command is responsible for listing all of the commands inside of the application. It contains the command
     * signature and a brief description of the commands functionality.
     *
     * @return void
     */
    public function run(): void
    {
        $this->climate->table([
            [
                'Command'     => 'memory:total',
                'Description' => 'Returns the total memory in bytes'
            ],
            [
                'Command'     => 'memory:free',
                'Description' => 'Returns the free memory in bytes'
            ],
            [
                'Command'     => 'memory:free:real',
                'Description' => 'Returns the available memory in bytes'
            ],
            [
                'Command'     => 'memory:available',
                'Description' => 'Returns the available memory in bytes'
            ],
            [
                'Command'     => 'memory:buffer',
                'Description' => 'Returns the available memory in bytes'
            ],
            [
                'Command'     => 'memory:cached',
                'Description' => 'Returns the available memory in bytes'
            ],
            [
                'Command'     => 'memory:swap',
                'Description' => 'Returns the available memory in bytes'
            ],
            [
                'Command'     => 'memory:shmem',
                'Description' => 'Returns the available memory in bytes'
            ],
            [
                'Command'     => 'memory:sreclaimable',
                'Description' => 'Returns the available memory in bytes'
            ],
            [
                'Command'     => 'memory:sunreclaimable',
                'Description' => 'Returns the available memory in bytes'
            ],
            [
                'Command'     => 'memory:used',
                'Description' => 'Returns the used memory in bytes'
            ],
            [
                'Command'     => 'memory:used:percent',
                'Description' => 'Returns the available memory in bytes'
            ],
        ]);
    }
}