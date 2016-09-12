<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContractorAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_attributes', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';

            $table->integer('contractor_id')->unsigned();
            $table->integer('trade_attribute_id')->unsigned();

            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
            $table->foreign('trade_attribute_id')->references('id')->on('trade_attributes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contractor_attributes');
    }
}
