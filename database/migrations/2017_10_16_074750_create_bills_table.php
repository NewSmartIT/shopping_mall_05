<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->nullable()->comment('Khách hàng id');
            $table->float('total_price')->nullable()->comment('Tổng tiền');
            $table->date('order_date')->nullable()->comment('Ngày đặt hàng');
            $table->date('delivery_date')->nullable()->comment('Ngày giao hàng');
            $table->enum('status',['done','notdone'])->nullable()->comment('Tình trạng đơn hàng');
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
        Schema::dropIfExists('bills');
    }
}
