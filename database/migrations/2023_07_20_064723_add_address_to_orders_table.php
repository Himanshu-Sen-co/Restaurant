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
            $table->string('address')->default('null')->after('itemDescription');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders_tables', function (Blueprint $table) {
            $table->string('address') ->default('null')->after('itemDescription');
        });
    }
};
