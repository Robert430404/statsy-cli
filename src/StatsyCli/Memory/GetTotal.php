<?php

namespace Robert430404\StatsyCli\Memory;

use Tms157\Statsy\Memory;
use League\CLImate\CLImate;
use Tms157\Statsy\Factories\MemoryFactory;

/**
 * Class GetTotal
 *
 * @package Robert430404\StatsyCli\Memory
 */
class GetTotal
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
     * GetUsed constructor.
     */
    public function __construct()
    {
        $this->climate = new CLImate();
        $this->memory = new Memory(
            new MemoryFactory()
        );
    }

    /**
     * Runs the command
     *
     * @return void
     */
    public function run(): void
    {
        $this->climate->info(
            $this->memory->getTotal()->getB()
        );
    }
}