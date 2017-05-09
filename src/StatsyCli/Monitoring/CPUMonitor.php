<?php

namespace Robert430404\StatsyCli\Monitoring;

use League\CLImate\CLImate;
use Robert430404\StatsyCli\Contracts\Command;
use Tms157\Statsy\Cpu;
use Tms157\Statsy\Factories\CpuFactory;

/**
 * Class CpuMonitor
 *
 * @package Robert430404\StatsyCli\Monitoring
 */
class CpuMonitor implements Command
{
    /**
     * @var Cpu
     */
    private $cpu;

    /**
     * @var CLImate
     */
    private $climate;

    /**
     * CpuMonitor constructor.
     */
    public function __construct()
    {
        $this->climate = new CLImate();
        $this->cpu     = new Cpu(
            new CpuFactory()
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
            $this->refreshCpu();
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
    private function refreshCpu(): void
    {
        $this->cpu = new Cpu(
            new CpuFactory()
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
                'CPU Load'  => $this->cpu->getLoad()       . ' %',
                'CPU Model' => $this->cpu->getModel()      . ' GHz',
                'CPU Cores' => $this->cpu->getCores()      . ' GHz',
                'CPU Clock' => $this->cpu->getClockSpeed() . ' GHz',
                'CPU Cache' => $this->cpu->getCache()      . ' GHz',
            ],
        ]);
        sleep(1); // Forces A Refresh Every Second
    }
}