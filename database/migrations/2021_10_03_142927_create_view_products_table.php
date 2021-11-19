<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_products', function (Blueprint $table) {
            $table->id();
            $table->string("productName",255);
            $table->string("name",255);
            $table->string("address",255);
            $table->text("topic");
            $table->integer("status")->default(0);
            $table->integer("mobile");
            $table->string("filename",255)->nullable();
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
        Schema::dropIfExists('view_products');
    }
}
