<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creators', function (Blueprint $table) {
            $table->bigInteger('id',true)->unsigned()->unique();
            $table->string('name');
            $table->bigInteger('gender')->unsigned()->nullable()->default(0);
            $table->string('youtube_url')->nullable();
            $table->bigInteger('fee_1')->nullable();
            $table->bigInteger('fee_2')->nullable();
            $table->bigInteger('fee_3')->nullable();
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
        Schema::dropIfExists('creators');
    }
}
