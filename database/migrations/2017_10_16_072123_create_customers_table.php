<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account')->nullable()->comment('Tài khoản');
            $table->string('password')->nullable()->comment('Mật khẩu');
            $table->string('fullname')->nullable()->comment('Họ tên');
            $table->string('email')->nullable()->comment('Email');
            $table->date('dob')->nullable()->comment('Ngày sinh');
            $table->enum('gender',['male','female'])->nullable()->comment('Giới tính');
            $table->string('address')->nullable()->comment('Địa chỉ');
            $table->string('job')->nullable()->comment('Nghề nghiệp');
            $table->string('phone_number')->nullable()->comment('Số điện thoại');
            $table->integer('status')->default('1')->comment('Trạng thái, 1-hoạt động, 0-bị khóa');
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
        Schema::dropIfExists('customers');
    }
}
