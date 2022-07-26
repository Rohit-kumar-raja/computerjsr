<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custome_pcs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('motherboard_brand');
            $table->string('motherboard_name');
            $table->string('graphic_card_brand');
            $table->string('graphic_card_name');
            $table->string('smps_brand');
            $table->string('smps_name');
            $table->string('primay_storrage');
            $table->string('secondary_storage');
            $table->string('primary_name');
            $table->string('secondary_name');
            $table->string('ram_brand');
            $table->string('ram_name');
            $table->string('coolers_brand');
            $table->string('coolers_name');
            $table->string('wifi_brand');
            $table->string('wifi_name');
            $table->string('custom_mode');
            $table->string('total');
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
        Schema::dropIfExists('custome_pcs');
    }
};
