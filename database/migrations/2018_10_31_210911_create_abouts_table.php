<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('sub_title');
            $table->text('description');
            $table->string('large_image');
            $table->string('small_image');

            $table->string('title2');
            $table->string('description2');

            $table->string('title_menu');
            $table->text('description_menu');


            $table->string('title_gallery');
            $table->text('description_gallery');

            // $table->string('title_reservation');
            // $table->string('sub_title_reservation');
            // $table->text('description_reservation');

            // $table->string('title_subscribe');
            // $table->text('description_subscribe');

            $table->timestamps();
        });

        Schema::create('abouts_images', function (Blueprint $table) {
            $table->increments('id');

            $table->string('image');
            $table->string('title');
            $table->text('description');

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
        Schema::dropIfExists('abouts');
        Schema::dropIfExists('abouts_images');
    }
}
