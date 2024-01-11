<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Institute;
use Illuminate\Console\Command;

class UpdateInstituteDates extends Command
{
    protected $signature = 'institute:update-dates';
    protected $description = 'Update startDate and endDate of Institutes on December 31st';

    public function handle()
    {
        if ($this->confirm('Do you really want to update Institute dates?')) {
            $today = Carbon::today();
            $lastDayOfYear = Carbon::create($today->year, 12, 31);

            if ($today->eq($lastDayOfYear)) {
                Institute::all()->each(function ($institute) {
                    // Update startDate and endDate to the next year
                    $institute->start_date->addYear();
                    $institute->end_date->addYear();
                    $institute->save();
                });

                $this->info('Institute dates updated successfully.');
            } else {
                $this->info('No updates needed.');
            }
        } else {
            $this->info('Update canceled.');
        }
    }
}
