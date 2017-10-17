<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->nullable()->comment('Tên sản phẩm');
            $table->integer('brand_id')->unsigned()->nullable()->comment('Tên hãng id');
            $table->date('date')->nullable()->comment('Ngày nhập');
            $table->float('price')->nullable()->comment('Giá sản phẩm');
            $table->enum('special',['yes','no'])->nullable()->comment('Sản phẩm đặc biệt');
            $table->text('description')->nullable()->comment('Mô tả');
            $table->string('status')->nullable()->comment('Tình trạng');
            $table->string('guarantee')->nullable()->comment('Bảo hành');
            $table->string('promotion')->nullable()->comment('Khuyến mại');
            $table->float('rate')->nullable()->comment('Giá sản phẩm');
            $table->integer('number_customer')->nullable()->comment('Số lượng khách hàng đánh giá');
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
        Schema::dropIfExists('products');
    }
}
