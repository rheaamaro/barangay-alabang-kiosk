<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // links to the resident
            $table->string('queue_number')->unique();  // e.g., ALABANG-26-0001
            $table->string('service_name');            // e.g., "Certificate Request"
            $table->text('description')->nullable();   // optional details
            $table->string('status')->default('Waiting'); // Waiting | Serving Now | Completed
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};