<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_orderdetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('orderid');
            $table->unsignedInteger('productid');
            $table->float('price');
            
            $table->unsignedInteger('qty');
           
            $table->float('amount');
            
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_orderdetail');
    }
}
