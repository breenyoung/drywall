<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContractorRatingOverview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_rating_overview', function (Blueprint $table)
        {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('contractor_id')->unsigned();
            $table->integer('total_jobs')->unsigned();
            $table->decimal('rating_communication_average')->unsigned();
            $table->decimal('rating_quality_average')->unsigned();
            $table->decimal('rating_price_average')->unsigned();
            $table->decimal('rating_timelyness_average')->unsigned();

            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contractor_rating_overview');
    }
}
