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
        Schema::create('service_provider_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_id')->unique();
            $table->string('profile_picture')->nullable(); // For profile picture
            $table->text('bio')->nullable(); // Short bio about the service provider
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
    
            $table->foreign('application_id')
                ->references('id')
                ->on('service_provider_applications')
                ->onDelete('cascade'); // Cascades on application deletion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_provider_profiles');
    }
};
