<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('amount')->default('0');
            $table->string('price')->default('0');
            $table->integer('rarity');
            $table->string('properties');
            $table->string('category');
            $table->string('baseColor');
            $table->string('overlayColor');
            $table->integer('hitsToBreak')->nullable();
            $table->integer('growtimeInSeconds')->nullable();
            $table->string('clothingType')->nullable();
            $table->string('lastedit')->nullable();
            $table->string('daily')->default('0');
            $table->string('nullable')->default('0');
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
        Schema::dropIfExists('items');
    }
}
