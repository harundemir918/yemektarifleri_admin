<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category');
            $table->string('title');
            $table->text('ingredients');
            $table->text('recipe');
            $table->string('calories');
            $table->string('duration');
            $table->string('person');
            $table->string('carbohydrate');
            $table->string('protein');
            $table->string('fat');
            $table->integer('active')->default(0);
            $table->integer('recommended')->default(0);
            $table->text('picture');
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
        Schema::dropIfExists('recipes');
    }
}
