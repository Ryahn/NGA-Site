<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalStatsToShipUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ship_user', function (Blueprint $table) {
            $table->integer('survived_battles')->unsigned()->nullable();
            $table->integer('planes_killed')->unsigned()->nullable();
            $table->integer('battles')->unsigned()->nullable();
            $table->integer('max_ships_spotted')->unsigned()->nullable();
            $table->integer('team_capture_points')->unsigned()->nullable();
            $table->integer('capture_points')->unsigned()->nullable();
            $table->integer('survived_wins')->unsigned()->nullable();
            $table->integer('losses')->unsigned()->nullable();
            $table->integer('damage_dealt')->unsigned()->nullable();
            $table->integer('max_planes_killed')->unsigned()->nullable();
            $table->text('last_battle_time')->nullable();
            $table->integer('distance')->unsigned()->nullable();
            $table->text('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ship_user', function (Blueprint $table) {
            $table->dropColumn([
                'survived_battles',
                'planes_killed',
                'battles',
                'max_ships_spotted',
                'team_capture_points',
                'capture_points',
                'survived_wins',
                'losses',
                'damage_dealt',
                'max_planes_killed',
                'last_battle_time',
                'distance',
                'max_planes_killed',
                'updated_at'
                ]);
        });
    }
}
