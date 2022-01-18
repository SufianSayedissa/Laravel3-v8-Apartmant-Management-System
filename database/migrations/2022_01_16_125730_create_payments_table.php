<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->Integer('user_id')->nullable();
            $table->Integer('year')->nullable();
            $table->string('month',7)->nullable();
            $table->string('payment')->nullable();
            $table->string('note',100)->nullable();
            $table->String('status',10)->nullable()->default('New');
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
        Schema::dropIfExists('payments');
    }
}

