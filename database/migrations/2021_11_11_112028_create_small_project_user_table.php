<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmallProjectUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small_project_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('small_project_id')->constrained();
            $table->integer("money");
            $table->foreignId('payment_id')->constrained();
            $table->string("Allname",255)->nullable();
            $table->bigInteger("NumberId")->nullable();
            $table->integer("CVV")->nullable();
            $table->date('dateOfEnd')->nullable();
            $table->bigInteger("phone")->nullable();
            $table->string("password",255)->nullable();
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
        Schema::dropIfExists('small_project_user');
    }
}
