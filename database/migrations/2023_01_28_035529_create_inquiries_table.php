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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('package_title')->nullable();
            $table->text('package_excerpt')->nullable();
            $table->string('package_price')->nullable();
            $table->string('package_per')->nullable();

            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->date('date')->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('inquiries');
    }
};
