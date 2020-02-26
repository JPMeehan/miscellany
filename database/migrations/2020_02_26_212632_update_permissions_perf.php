<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePermissionsPerf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campaign_permissions', function (Blueprint $table) {
            $table->unsignedTinyInteger('action')->nullable();
            $table->unsignedInteger('entity_type_id')->nullable();

            $table->index(['action']);

            $table->foreign('entity_type_id')->references('id')->on('entity_types')->onDelete('cascade');
            //$table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campaign_permissions', function (Blueprint $table) {
            $table->dropColumn('entity_type_id');
            $table->dropColumn('action');
        });
    }
}
