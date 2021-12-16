<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id()->autoIncrement();
            $table->String('title',150);
            $table->String('keywords')->nullable();
            $table->String('description')->nullable();
            $table->String('image',100)->nullable();
            $table->Integer('category_id')->nullable();
            $table->Integer('user_id')->nullable();
            $table->text('detail')->nullable();
            $table->String('city')->nullable();
            $table->String('country')->nullable();
            $table->String('location')->nullable();
            $table->String('slug',100)->nullable();
            $table->String('status',5)->nullable()->default('false');
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
        Schema::dropIfExists('products');
    }
}
