<?php

namespace Robert430404\StatsyCli\Contacts;

/**
 * Interface Command
 *
 * This specifies the required methods for a valid command inside of the statsy cli client.
 *
 * @package Robert430404\StatsyCli\Contacts
 */
interface Command
{
    /**
     * This is executed when you run your command from the command line through runner.
     */
    public function run(): void;
}