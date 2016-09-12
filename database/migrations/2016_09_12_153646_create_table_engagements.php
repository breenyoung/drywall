<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEngagements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engagements', function (Blueprint $table)
        {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('consumer_id')->unsigned();
            $table->integer('contractor_id')->unsigned();
            $table->integer('consumer_state_id')->unsigned();
            $table->integer('contractor_state_id')->unsigned();
            $table->boolean('completed')->default(0);
            $table->timestamps();

            $table->foreign('consumer_id')->references('id')->on('consumers')->onDelete('cascade');
            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
            $table->foreign('consumer_state_id')->references('id')->on('engagement_states')->onDelete('cascade');
            $table->foreign('contractor_state_id')->references('id')->on('engagement_states')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('engagements');
    }
}
