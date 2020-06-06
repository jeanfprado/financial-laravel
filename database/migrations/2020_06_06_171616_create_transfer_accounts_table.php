<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_transfer');
            $table->decimal('amount', 8,2);

            $table->unsignedBigInteger('account_provider_id');
            $table->unsignedBigInteger('account_recipient_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('account_provider_id')->references('id')->on('accounts');
            $table->foreign('account_recipient_id')->references('id')->on('accounts');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('transfer_accounts');
    }
}
