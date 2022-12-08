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
        Schema::create('catalog_lagus', function (Blueprint $table) {
            $table->id();
            $table->string('no')->nullable();
            $table->string('cover_atwork');
            $table->string('title');
            $table->string('artis_name')->nullable();
            $table->string('genre');
            $table->string('sub_genre')->nullable();
            $table->string('record_label');
            $table->string('produced_by')->nullable();
            $table->string('production_year');
            $table->string('first_release_date');
            $table->string('release_date');
            $table->string('lyric_language');
            $table->string('lyric_url')->nullable();
            $table->text('description')->nullable(); 
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('catalog_lagus');
    }
};
