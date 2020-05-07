<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_images', function (Blueprint $table) {

                $table->id();
                $table->bigInteger('user_id')->nullable();
                $table->boolean('actif');
                $table->string('name');
                $table->string('description');
                $table->string('path');
                $table->string('medium_path')->nullable();
                $table->string('low_path')->nullable();
                $table->string('avatar_path')->nullable();
                $table->dateTime('uploaded_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_images');
    }
}
