<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_datas', function (Blueprint $table) {
            $table->id();
            $table->string("name",255);
            $table->string("email",255);
            $table->string('password')->nullable();
            $table->integer("mobile");
            $table->string('facebook',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string("image",255);
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
        Schema::dropIfExists('admin_datas');
    }
}
