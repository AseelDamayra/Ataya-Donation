<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmallProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small_projects', function (Blueprint $table) {
            $table->id();
            $table->string("title",255);
            $table->string("name",255);
            $table->string("address",255);
            $table->integer("status")->default(0);
            $table->integer("mobile");
            $table->integer("money");
            $table->foreignId('user_id')->constrained() ;
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
        Schema::dropIfExists('small_projects');
    }
}
