<?php

namespace Robert430404\StatsyCli\Memory;

use Robert430404\StatsyCli\Contracts\Command;
use Tms157\Statsy\Memory;
use League\CLImate\CLImate;
use Tms157\Statsy\Factories\MemoryFactory;

/**
 * Class GetSUnreclaimable
 *
 * @package Robert430404\StatsyCli\Memory
 */
class GetSUnreclaimable implements Command
{
    /**
     * @var Memory
     */
    private $memory;

    /**
     * @var CLImate
     */
    private $climate;

    /**
     * GetSUnreclaimable constructor.
     *
     * Creates the environment for the command to run. In this case it's associating an instance of CLImate to the
     * property inside of the object, as well as associated an instance of the memory class to the property inside
     * of the object.
     */
    public function __construct()
    {
        $this->climate = new CLImate();
        $this->memory  = new Memory(
            new MemoryFactory()
        );
    }

    /**
     * Runs the command
     *
     * This command is returning the value of S Unreclaimable memory in bytes from the system.
     *
     * @return void
     */
    public function run(): void
    {
        $this->climate->info(
            $this->memory->getSUnreclaim()->getB()
        );
    }
}