<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stands', function ($table) {
            $table->string('image_url');
            $table->text('description');
            $table->decimal('price', 9,2);
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stands', function ($table) {
            $table->dropColumn('image_url');
            $table->dropColumn('description');
            $table->dropColumn('price');
        });
    }
}
