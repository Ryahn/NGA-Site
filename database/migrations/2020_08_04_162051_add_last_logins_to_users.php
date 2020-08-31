<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLastLoginsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('last_battle_time')->nullable();
            $table->text('U_created_at')->nullable();
            $table->text('u_updated_at')->nullable();
            $table->boolean('hidden_profile')->nullable();
            $table->text('logout_at')->nullable();
            $table->integer('leveling_tier')->nullable()->unsigned();
            $table->integer('survived_battles')->nullable()->unsigned();
            $table->integer('total_battles')->nullable()->unsigned();
            $table->integer('survived_wins')->nullable()->unsigned();
            $table->integer('total_frags')->nullable()->unsigned();
            $table->integer('max_frags_battle')->nullable()->unsigned();
            $table->integer('total_wins')->nullable()->unsigned();
            $table->integer('total_losses')->nullable()->unsigned();
            $table->integer('total_damage_dealt')->nullable()->unsigned();
            $table->integer('max_planes_killed')->nullable()->unsigned();
            $table->integer('total_planes_killed')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'last_battle_time',
                'U_created_at',
                'u_updated_at',
                'hidden_profile',
                'logout_at',
                'leveling_tier',
                'survived_battles',
                'total_battles',
                'survived_wins',
                'total_frags',
                'max_frags_battle',
                'total_wins',
                'total_losses',
                'total_damage_dealt',
                'max_planes_killed',
                'total_planes_killed'
                ]);

        });
    }
}
