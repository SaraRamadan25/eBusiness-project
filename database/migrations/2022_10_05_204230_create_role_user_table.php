<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{

    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('role_id')->constrained()->cascadeOnDelete();
            $table->text('permissions');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
