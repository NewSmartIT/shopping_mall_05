<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_bill', function (Blueprint $table) {

            $table->integer('pruduct_id');
            $table->integer('bill_id');
            $table->primary(['pruduct_id', 'bill_id']);
            $table->integer('quantity')->nullable()->comment('Số lượng');
            $table->float('price')->nullable()->comment('Giá sản phẩm');
            $table->text('note')->nullable()->comment('Ghi chú');
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
        Schema::dropIfExists('product_bill');
    }
}
