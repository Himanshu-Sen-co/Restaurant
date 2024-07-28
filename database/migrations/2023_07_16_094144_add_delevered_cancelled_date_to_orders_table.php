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
        Schema::table('orders_tables', function (Blueprint $table) {
            $table->date('delevered_date')->nullable();
            $table->date('cancelled_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders_tables', function (Blueprint $table) {
            $table->date('delevered_date')->nullable();
            $table->date('cancelled_date')->nullable();
        });
    }
};