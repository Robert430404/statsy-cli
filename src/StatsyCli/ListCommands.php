<?php

namespace Robert430404\StatsyCli;

use League\CLImate\CLImate;
use Robert430404\StatsyCli\Contracts\Command;

/**
 * Class ListCommands
 *
 * @package Robert430404\StatsyCli
 */
class ListCommands implements Command
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
                'Description' => 'Shows a table with all of the root commands'
            ],
            [
                'Command'     => 'memory',
                'Description' => 'Lists all of the memory functions'
            ],
        ]);
    }
}