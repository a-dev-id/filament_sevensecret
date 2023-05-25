<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_page_packages', function (Blueprint $table) {
            $table->id();
            $table->string('landing_page_id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();

            $table->longText('cover_image')->nullable();

            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();

            $table->string('price')->nullable();
            $table->string('per')->nullable();
            $table->string('min_night')->nullable();
            $table->string('min_person')->nullable();
            $table->string('promo_code')->nullable();

            $table->integer('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landing_page_packages');
    }
};
