<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelinePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('post');
            $table->string('privacy');
            $table->text('image')->nullable();
            $table->text('feeling')->nullable();
            $table->unsignedBigInteger('like')->nullable()->default(0);
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('timeline_posts');
    }
}
