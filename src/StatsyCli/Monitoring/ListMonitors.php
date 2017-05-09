<?php

namespace Robert430404\StatsyCli\Monitoring;

use League\CLImate\CLImate;
use Robert430404\StatsyCli\Contracts\Command;

/**
 * Class ListMonitors
 *
 * @package Robert430404\StatsyCli\Monitoring
 */
class ListMonitors implements Command
{
    private $climate;

    /**
     * ListMonitors constructor.
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
     * This command is responsible for listing all of the commands that exist in the monitor namespace. It contains the
     * command signature and a brief description of the commands functionality.
     *
     * @return void
     */
    public function run(): void
    {
        $this->climate->table([
            [
                'Command'     => 'monitor:memory',
                'Description' => 'Launches A Self Updating Memory Monitor'
            ],
            [
                'Command'     => 'monitor:disk',
                'Description' => 'Launches A Self Updating Memory Monitor'
            ],
            [
                'Command'     => 'monitor:cpu',
                'Description' => 'Launches A Self Updating Memory Monitor'
            ],
        ]);
    }
}