<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('path_to_thumbnail')->default('/images/missing.png');
            $table->float('price')->unsigned();
            $table->integer('quantity')->unsigned()->nullable();
            $table->integer('number_of_ratings')->unsigned()->nullable();
            $table->float('ratings_sum')->unsigned()->nullable();
            $table->float('average_rating')->unsigned()->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('made_in')->nullable();
            $table->integer('year')->unsigned()->nullable();

            $table->string('e_n_1')->nullable();
            $table->string('e_d_1')->nullable();
            $table->string('e_n_2')->nullable();
            $table->string('e_d_2')->nullable();
            $table->string('e_n_3')->nullable();
            $table->string('e_d_3')->nullable();
            $table->string('e_n_4')->nullable();
            $table->string('e_d_4')->nullable();
            $table->string('e_n_5')->nullable();
            $table->string('e_d_5')->nullable();

            $table->timestamps();

            $table->integer('subcategory_id')->index()->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')
                ->onDelete('cascade');

            $table->integer('category_id')->index()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
