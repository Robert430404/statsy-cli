<?php

namespace Robert430404\StatsyCli\Monitoring;

use League\CLImate\CLImate;
use Robert430404\StatsyCli\Contracts\Command;
use Tms157\Statsy\Factories\MemoryFactory;
use Tms157\Statsy\Memory;

/**
 * Class MemoryMonitor
 *
 * @package Robert430404\StatsyCli\Monitoring
 */
class MemoryMonitor implements Command
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
     * MemoryMonitor constructor.
     */
    public function __construct()
    {
        $this->climate = new CLImate();
        $this->memory  = new Memory(
            new MemoryFactory()
        );
    }

    /**
     * Runs The Command
     *
     * This outputs an active display of memory information through the terminal for the purpose of monitoring the
     * memory usage.
     *
     * @return void
     */
    public function run(): void
    {
        while (true) {
            $this->refreshMemory();
            $this->displayOutput();
        }
    }

    /**
     * Refreshes The Memory Object With New Data
     *
     * TODO: Find A Better Way To Read Proc Updates
     *
     * @return void
     */
    private function refreshMemory(): void
    {
        $this->memory = new Memory(
            new MemoryFactory()
        );
    }

    /**
     * Displays The Memory Monitoring Dashboard
     *
     * @return void
     */
    private function displayOutput(): void
    {
        $this->climate->clear();
        $this->climate->bold()->table([
            [
                'Used %'    => $this->memory->getUsedPercent()        . '%',
                'Available' => $this->memory->getAvailable()->getMb() . ' MB',
                'Free'      => $this->memory->getFree()->getMb()      . ' MB',
                'Real Free' => $this->memory->getRealFree()->getMb()  . ' MB',
                'Buffer'    => $this->memory->getBuffer()->getMb()    . ' MB',
                'Cached'    => $this->memory->getCached()->getMb()    . ' MB',
                'Swap'      => $this->memory->getSwap()->getMb()      . ' MB',
                'Total'     => $this->memory->getTotal()->getMb()     . ' MB',
            ],
        ]);
        sleep(1); // Forces A Refresh Every Second
    }
}