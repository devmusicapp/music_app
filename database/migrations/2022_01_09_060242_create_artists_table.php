<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigInteger('id',true)->unsigned()->unique();
            $table->string('name');
            $table->bigInteger('part')->unsigned()->nullable();
            $table->bigInteger('place')->unsigned()->nullable();
            $table->bigInteger('gender')->unsigned()->nullable();
            $table->bigInteger('age')->unsigned()->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('favorite_musician')->nullable();
            $table->text('self_pr')->nullable();          
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('artists');
    }
}
