<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Invoice;
use Illuminate\Console\Command;

class DeletePendingInvoices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invoices:delete-pending';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete pending invoices after 30 days';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $thirthyDaysAgo = Carbon::now()->subDays(30);

        Invoice::where('status', 'pending')
            ->where('created_at', '<', $thirthyDaysAgo)
            ->delete();

        $this->info('Pending invoices deleted successfully.');
    }
}
