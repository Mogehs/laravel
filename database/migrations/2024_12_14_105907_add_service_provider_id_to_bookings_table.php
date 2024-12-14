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
        Schema::table('bookings', function (Blueprint $table) {
            // Add the service_provider_id column
            $table->unsignedBigInteger('service_provider_id')->nullable()->after('service_id');
            
            // Add foreign key constraint
            $table->foreign('service_provider_id')->references('id')->on('service_provider_applications')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['service_provider_id']);
            
            // Remove the column
            $table->dropColumn('service_provider_id');
        });
    }
};
