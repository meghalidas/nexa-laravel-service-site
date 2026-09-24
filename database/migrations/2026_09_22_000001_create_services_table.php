<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('category');
            $table->text('excerpt');
            $table->longText('description');
            $table->string('icon')->default('✦');
            $table->string('image_url');
            $table->unsignedInteger('starting_price');
            $table->string('price_label')->default('Starting at');
            $table->unsignedTinyInteger('rating')->default(5);
            $table->unsignedInteger('review_count')->default(0);
            $table->string('delivery_time')->default('2–4 weeks');
            $table->json('features')->nullable();
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

