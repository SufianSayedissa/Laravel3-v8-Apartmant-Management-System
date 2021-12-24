<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->String('name', 100);
            $table->String('email',50)->nullable();
            $table->String('phone',20)->nullable();
            $table->String('subject',100)->nullable();
            $table->text('message')->nullable();
            $table->String('ip')->nullable();
            $table->String('status',5)->nullable()->default('New');
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
        Schema::dropIfExists('messages');
    }
}
