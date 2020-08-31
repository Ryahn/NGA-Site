<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->primary();
            $table->string('name');
            $table->string('creator_name');
            $table->integer('c_updated_at');
            $table->integer('c_created_at');
            $table->string('leader_name');
            $table->integer('creator_id');
            $table->integer('leader_id');
            $table->string('tag');
            $table->text('members');
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
        Schema::dropIfExists('clans');
    }
}
