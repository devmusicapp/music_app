<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists_posts', function (Blueprint $table) {
            $table->bigInteger('id',true)->unsigned()->unique();
            $table->string('title');
            $table->text('message')->nullable();
            $table->bigInteger('artist_id')->unsigned();
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists_posts');
    }
}
