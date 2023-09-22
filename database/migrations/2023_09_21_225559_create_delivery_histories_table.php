<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_histories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('reference_code');
            $table->string('delivery_from');
            $table->string('delivery_to');
            $table->string('delivery_date');
            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->string('delivery_amount');
            $table->string('delivery_item');
            $table->tinyInteger('delivery_status_id')->default(0)->comment('0 - Pending, 1 - Delivered, 2 - Cancelled');
            $table->tinyInteger('payment_status_id')->default(0)->comment('0 - Pending, 1 - Delivered, 2 - Cancelled');
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
        Schema::dropIfExists('delivery_histories');
    }
}
