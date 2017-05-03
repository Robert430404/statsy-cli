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
     */
    public function __construct()
    {
        $this->climate = new CLImate();
    }

    /**
     * Runs the command
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
        ]);
    }
}