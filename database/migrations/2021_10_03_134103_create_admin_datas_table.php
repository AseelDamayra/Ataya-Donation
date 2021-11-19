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
            $table->id('admin_id');
            $table->string("name",255);
            $table->string("email",255);
            $table->integer("mobile");
            $table->string('facebook',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->integer("login_id");
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
