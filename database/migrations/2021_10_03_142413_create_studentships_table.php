<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentships', function (Blueprint $table) {
            $table->id();
            $table->string("major",255);
            $table->string("name",255);
            $table->string("University",255);
            $table->string("City",255);
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
        Schema::dropIfExists('studentships');
    }
}
