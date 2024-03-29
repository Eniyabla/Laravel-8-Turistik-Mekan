<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_counters', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('likeable');
            $table->enum('type_id', [
                'like',
                'dislike',
            ])->default('like');
            $table->integer('count')->unsigned()->default(0);

            $table->unique([
                'likeable_id',
                'likeable_type',
                'type_id',
            ], 'like_counter_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_counters');
    }
}
