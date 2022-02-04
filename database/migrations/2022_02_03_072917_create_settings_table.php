<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('settings_id');
            $table->string('vendor_name', 100)->nullable();
            $table->string('vendor_logo', 200)->nullable();
            $table->longText('vendor_address')->nullable();
            $table->string('vendor_phone', 13)->nullable();
            $table->string('vendor_email', 50)->nullable();
            $table->string('fb_link', 150)->nullable();
            $table->string('inst_link', 150)->nullable();
            $table->string('twit_link', 150)->nullable();
            $table->string('site_favicon', 150)->nullable();
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
