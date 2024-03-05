<?php

use App\Constants\CupponType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuppons', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('code');
            $table->enum('type', [CupponType::PERCENTAGE, CupponType::FIXED]); 
            $table->decimal('amount', 10, 2);
            $table->foreignId('property_id')->constrained('properties')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuppons');
    }
};
