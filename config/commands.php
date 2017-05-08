<?php

/**
 * All of the registered commands in the system.
 */

return [
    'list'                  => '\Robert430404\StatsyCli\ListCommands',
    'memory'                => '\Robert430404\StatsyCli\Memory\ListMemory',
    'memory:total'          => '\Robert430404\StatsyCli\Memory\GetTotal',
    'memory:free'           => '\Robert430404\StatsyCli\Memory\GetFree',
    'memory:free:real'      => '\Robert430404\StatsyCli\Memory\GetRealFree',
    'memory:available'      => '\Robert430404\StatsyCli\Memory\GetAvailable',
    'memory:buffer'         => '\Robert430404\StatsyCli\Memory\GetBuffer',
    'memory:cached'         => '\Robert430404\StatsyCli\Memory\GetCached',
    'memory:swap'           => '\Robert430404\StatsyCli\Memory\GetSwap',
    'memory:shmem'          => '\Robert430404\StatsyCli\Memory\GetShMem',
    'memory:sreclaimable'   => '\Robert430404\StatsyCli\Memory\GetSReclaimable',
    'memory:sunreclaimable' => '\Robert430404\StatsyCli\Memory\GetSUnreclaimable',
    'memory:used'           => '\Robert430404\StatsyCli\Memory\GetUsed',
    'memory:used:percent'   => '\Robert430404\StatsyCli\Memory\GetUsedPercent',
];