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
    Schema::create('service_provider_applications', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); 
        $table->unsignedBigInteger('service_id'); // Replace service with service_id
        $table->string('location');
        $table->text('experience');
        $table->text('reason');
        $table->timestamps();

        // Foreign key constraints
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade'); // New foreign key
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_provider_applications');
    }
};
