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
        Schema::create('user_account_loan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_account_id');
            $table->string('loan_no');
            $table->float('loan_capital_amount');
            $table->float('loan_current_amount_to_pay');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('user_account_loan');
    }
};
