<?php

use App\Constants\Status;
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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->integer('category_id');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('address');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('gallery_id')->nullable();
            $table->bigInteger('price');
            $table->string('status')->nullable()->default(Status::DRAFT);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
