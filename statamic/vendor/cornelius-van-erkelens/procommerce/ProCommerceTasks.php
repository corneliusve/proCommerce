<?php

namespace Statamic\Addons\ProCommerce;

use Statamic\Extend\Tasks;
use Illuminate\Console\Scheduling\Schedule;

class ProCommerceTasks extends Tasks
{
    /**
     * Define the task schedule
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     */
    public function schedule(Schedule $schedule)
    {
        // $schedule->command('cache:clear')->weekly();
    }
}
