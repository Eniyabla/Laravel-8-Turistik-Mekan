<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->String('title',150);
            $table->String('keywords')->nullable();
            $table->String('description')->nullable();
            $table->String('company')->nullable();
            $table->String('address')->nullable();
            $table->String('phone',20)->nullable();
            $table->String('fax',20)->nullable();
            $table->String('email',30)->nullable();
            $table->String('smtpserver',75)->nullable();
            $table->String('smtpemail',75)->nullable();
            $table->String('smtppassword',75)->nullable();
            $table->String('smtpport',15)->nullable();
            $table->String('facebook')->nullable();
            $table->String('youtube')->nullable();
            $table->String('linkedin')->nullable();
            $table->String('twitter')->nullable();
            $table->String('instagram')->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
