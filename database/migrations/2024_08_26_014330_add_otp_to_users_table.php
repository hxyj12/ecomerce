<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('otp')->nullable(); // 添加 otp 列并允许为空
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('otp');
    });
}

};
