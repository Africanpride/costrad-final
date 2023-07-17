<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('invoice_id')->constrained('invoices')->onDelete('cascade');
            $table->foreignUuid('transaction_id')->nullable()->constrained('transactions');
            $table->foreignUuid('participant_id')->nullable()->constrained('users');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices_transactions');
    }
};
