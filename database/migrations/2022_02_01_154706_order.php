<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('total_price');
            $table->enum('status', ['pending', 'paid', 'shipped', 'delivered', 'cancelled', 'expired']);
            $table->string('resi_number');
            $table->string('image');
            $table->string('receiver');
            $table->string('phone_number');
            $table->string('address');
            $table->date('expired_at');
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
        //
    }
}
