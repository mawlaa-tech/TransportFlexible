<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidp
     */
    public function up()
    {
        Schema::create('home_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_dis');
            $table->text('long_dis');
            $table->string('title_value_1');
            $table->string('des_value_1');
            $table->string('title_value_2');
            $table->string('des_value_2');
            $table->string('title_value_3');
            $table->string('des_value_3');
            $table->string('image');
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
        Schema::dropIfExists('home_abouts');
    }
}
