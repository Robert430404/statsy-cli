<?php

namespace Robert430404\StatsyCli\Memory;

use Tms157\Statsy\Memory;
use League\CLImate\CLImate;
use Tms157\Statsy\Factories\MemoryFactory;

/**
 * Class GetFree
 *
 * @package Robert430404\StatsyCli\Memory
 */
class GetFree
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
     * GetFree constructor.
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
     * This command is returning the value of free memory in bytes from the system.
     *
     * @return void
     */
    public function run(): void
    {
        $this->climate->info(
            $this->memory->getFree()->getB()
        );
    }
}