<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->primary();
            $table->string('name');
            $table->string('type');
            $table->string('tier_r');
            $table->string('tier_n');
            $table->longText('image');
            $table->boolean('is_premium');
            $table->string('nation');
            $table->decimal('average_damage_dealt', 42,21)->nullable();
            $table->decimal('average_frags', 42,21)->nullable();
            $table->decimal('win_rate', 42,21)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ships');
    }
}
