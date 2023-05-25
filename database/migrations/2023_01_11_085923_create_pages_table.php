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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();

            $table->string('banner_image')->nullable();
            $table->longText('cover_image')->nullable();

            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();

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
        Schema::dropIfExists('pages');
    }
};
