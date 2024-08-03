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
        Schema::create('conference_inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('activity_area');
            $table->string('city');
            $table->string('business_address');
            $table->string('email');
            $table->string('phone_number');
            $table->string('business_phone_number')->nullable();
            $table->string('status');
            $table->boolean('rejected')->default(false);

            $table->foreignIdFor(\App\Models\User::class)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_inscriptions');
    }
};
