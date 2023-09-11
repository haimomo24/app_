<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_order', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedInteger('userid');

            $table->string('name',255);
            $table->string('address',255);
            $table->string('email',255);
            $table->string('phone',255);
            $table->text('note');
          
            $table->unsignedTinyInteger('updated_by');
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
        Schema::dropIfExists('web_order');
    }
}
