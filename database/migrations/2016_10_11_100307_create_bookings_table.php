<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->integer('stand_id')->unsigned();
            $table->string('company_name');
            $table->string('logo_url');
            $table->string('document_url');
            $table->string('admin_email');              
            $table->timestamps();
        });

        Schema::table('bookings', function ($table) {
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('stand_id')->references('id')->on('stands');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}
