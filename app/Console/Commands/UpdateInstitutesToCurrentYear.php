<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Institute;
use Illuminate\Console\Command;

class UpdateInstitutesToCurrentYear extends Command
{
    protected $signature = 'institute:update-to-current-year';
    protected $description = 'Update startDate and endDate of all Institutes to the current year';

    public function handle()
    {
        if ($this->confirm('Do you really want to update all Institute dates to the current year?')) {
            $currentYear = Carbon::now()->year;

            Institute::all()->each(function ($institute) use ($currentYear) {
                // Update startDate and endDate to the current year
                $institute->start_date->setYear($currentYear);
                $institute->end_date->setYear($currentYear);
                $institute->save();
            });

            $this->info('Institute dates updated to the current year successfully.');
        } else {
            $this->info('Update canceled.');
        }
    }
}
