<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tages', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

            $table->string('title')->nullable();
            $table->text('description')->nullable();
            
            $table->string('type')->nullable();
            $table->string('files')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('mainPage', ['active', 'inactive'])->default('inactive');

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
        Schema::dropIfExists('order_tages');
    }
};