<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_logs', function (Blueprint $table) {
            // https://www.youtube.com/watch?v=7nb4feE7FBY&list=PLLUtELdNs2ZaAC30yEEtR6n-EPXQFmiVu&index=171
            $table->id();

            $table->integer('order_id');
            $table->string('order_status');

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
        Schema::dropIfExists('orders_logs');
    }
};
