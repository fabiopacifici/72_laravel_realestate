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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('https://media.vanityfair.com/photos/5e976f55ac720b00089fd0b9/master/w_2560%2Cc_limit/BuckinghamPalace-2020-GettyImages-1043783294.jpg');
            $table->string('reference_no', 12);
            $table->string('address', 100);
            $table->string('city', 50);
            $table->string('post_code', 10);
            $table->string('state', 50);
            $table->float('price', 10, 2)->nullable();
            $table->tinyInteger('rooms')->unsigned()->nullable();
            $table->tinyInteger('bathrooms')->unsigned()->nullable();
            $table->boolean('is_available')->default(1);
            $table->string('type')->nullable();
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
        Schema::dropIfExists('houses');
    }
};
