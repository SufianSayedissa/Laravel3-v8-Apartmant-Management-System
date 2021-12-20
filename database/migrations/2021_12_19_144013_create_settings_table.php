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
            $table->id()->autoIncrement();
            $table->String('title',150);
            $table->String('keywords')->nullable();
            $table->String('description')->nullable();
            $table->String('company',150)->nullable();
            $table->String('address',150)->nullable();
            $table->String('phone',20)->nullable();
            $table->String('fax',20)->nullable();
            $table->String('email',75)->nullable();
            $table->String('smtpserver',75)->nullable();
            $table->String('smtpemail',75)->nullable();
            $table->String('smtppassword',15)->nullable();
            $table->Integer('smtpport')->nullable()->default(0);
            $table->String('facebook',100)->nullable();
            $table->String('instagram',100)->nullable();
            $table->String('twitter',100)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
            $table->String('status',5)->nullable()->default('False');
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
