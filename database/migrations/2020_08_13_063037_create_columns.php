<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('name');
            $table->string('last_name');
            $table->string('cedula')->unique();;
            $table->string('departments');
            $table->string('city');
            $table->string('phone');
            $table->string('email')->unique();
            $table->boolean('habeas_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
            $table->dropColumn('name');
            $table->dropColumn('last_name');
            $table->dropColumn('cedula');
            $table->dropColumn('departments');
            $table->dropColumn('city');
            $table->dropColumn('phone');
            $table->dropColumn('habeas_data');
        });
    }
}
