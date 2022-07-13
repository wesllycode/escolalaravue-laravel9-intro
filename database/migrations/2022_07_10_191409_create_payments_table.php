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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                    ->constrained()
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('id_mp');
            $table->dateTime('date_created');
            $table->dateTime('date_approved');
            $table->dateTime('date_last_updated');
            $table->string('payment_method_id');
            $table->string('payment_type_id');
            $table->integer('payment_id');
            $table->string('status');
            $table->string('status_detail');
            $table->string('currency_id');
            $table->string('description')->nullable();
            $table->float('unit_price');
            $table->string('clienthotspot_id');
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
        Schema::dropIfExists('payments');
    }
};
