<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShipUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_user', function (Blueprint $table) {
            $table->bigInteger('ship_id')->unsigned()->index();
            $table->foreign('ship_id')->references('id')->on('ships')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('wins')->unsigned()->nullable();
            $table->integer('frags')->unsigned()->nullable();
            $table->bigInteger('max_damage_dealt')->unsigned()->nullable();
            $table->bigInteger('pr')->unsigned()->nullable();

            $table->primary(['ship_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ship_user');
    }
}
