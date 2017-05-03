<?php

namespace Robert430404\StatsyCli;

use League\CLImate\CLImate;

/**
 * Class ListCommands
 *
 * @package Robert430404\StatsyCli
 */
class ListCommands
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
                'Command'     => 'list',
                'Description' => 'Shows this table with all of our commands'
            ],
            [
                'Command'     => 'memory:total',
                'Description' => 'Returns the total memory in bytes'
            ],
            [
                'Command'     => 'memory:used',
                'Description' => 'Returns the used memory in bytes'
            ],
            [
                'Command'     => 'memory:free',
                'Description' => 'Returns the free memory in bytes'
            ],
            [
                'Command'     => 'memory:available',
                'Description' => 'Returns the available memory in bytes'
            ],
        ]);
    }
}