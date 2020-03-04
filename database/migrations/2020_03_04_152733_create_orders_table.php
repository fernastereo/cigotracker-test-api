<?php

use App\Order;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('phonenumber');
            $table->date('scheduleddate');
            $table->string('streetaddress');
            $table->unsignedBigInteger('city_id');
            $table->string('zipcode')->nullable();
            $table->unsignedBigInteger('statusorder_id')->default(Order::PENDING_ORDER);
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('statusorder_id')->references('id')->on('statusorders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
