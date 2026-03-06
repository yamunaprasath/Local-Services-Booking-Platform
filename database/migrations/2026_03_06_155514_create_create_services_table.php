<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_title');
            $table->string('service_category');
            $table->string('price_type');
            $table->decimal('base_price', 10, 2)->nullable();
            $table->decimal('discount_price', 10, 2)->nullable();

            $table->json('available_days')->nullable();

            $table->string('location_type');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->text('address');

            $table->json('highlight')->nullable();
            $table->json('service')->nullable();

            $table->text('other_service')->nullable();

            $table->json('faq')->nullable();

            $table->longText('description')->nullable();

            $table->json('gallery')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_services');
    }
};
