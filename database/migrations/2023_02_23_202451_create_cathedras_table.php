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
        Schema::create('cathedras', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('content')->nullable();
            $table->string('abbr')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->string('info')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('cathedras');
    }
};
