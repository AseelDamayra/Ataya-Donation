<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composes', function (Blueprint $table) {
            $table->id();
            $table->string("sender",255);
            $table->string("subject",255)->nullable();
            $table->string("email",255);
            $table->string("contact",255);
            $table->timestamp('sendtime')->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('composes');
    }
}
