<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEngagementNarratives extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engagement_narratives', function (Blueprint $table)
        {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('engagement_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('message');
            $table->boolean('seen')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('engagement_narratives');
    }
}
