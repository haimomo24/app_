<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_user', function (Blueprint $table) {
            $table->id();
            $table->string('name',1000)->comment('họ');
            $table->string('email',255);
            $table->string('phone',20);
            $table->string('gender',255);
            $table->string('username',255);
            $table->string('password',255);
            $table->string('adress',255);
            $table->string('roles',255);
            $table->string('image',255);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedTinyInteger('status');
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
        Schema::dropIfExists('web_user');
    }
}
