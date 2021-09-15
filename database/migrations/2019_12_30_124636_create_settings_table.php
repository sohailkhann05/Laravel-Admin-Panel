<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('opening_day');
            $table->string('closing_day');
            $table->string('opening_time');
            $table->string('closing_time');
            $table->string('phone_number');
            $table->string('email_address');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->text('location_address');
            $table->string('site_name');
            $table->text('about_info_short');
            $table->text('about_info_long');
            $table->string('about_banner');
            $table->string('site_logo');
            $table->string('fav_icon');
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
        Schema::dropIfExists('settings');
    }
}
