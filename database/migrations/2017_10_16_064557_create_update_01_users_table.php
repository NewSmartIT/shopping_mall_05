<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdate01UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('fullname')->nullable()->after('password');
            $table->enum('role',['admin','customer'])->nullable()->after('fullname');
            $table->enum('gender',['male','female'])->nullable()->after('role');
            $table->string('address')->nullable()->after('gender');
            $table->string('image')->nullable()->after('address');
            $table->string('score')->nullable()->default('0')->after('image');
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fullname');
            $table->dropColumn('role');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('image');
            $table->dropColumn('score');
            $table->dropSoftDeletes();
        });
    }
}
