<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContractorRatings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_ratings', function (Blueprint $table)
        {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('contractor_id')->unsigned();
            $table->integer('engagement_id')->unsigned();
            $table->decimal('rating_communication')->unsigned();
            $table->decimal('rating_quality')->unsigned();
            $table->decimal('rating_price')->unsigned();
            $table->decimal('rating_timelyness')->unsigned();
            $table->text('comments')->nullable();
            $table->timestamps();

            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
            $table->foreign('engagement_id')->references('id')->on('engagements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contractor_ratings');
    }
}
