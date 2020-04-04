<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->boolean('active')->default(1);
            $table->string('title');
            $table->enum('type', ['wallet', 'bank', 'credit_card']);
            $table->decimal('balance', 8,2)->nullable();
            $table->date('date_balance')->nullable();
            $table->integer('credit_close')->nullable();
            $table->integer('credit_number')->nullable();
            $table->integer('credit_due')->nullable();
            $table->decimal('credit_limit', 8,2)->nullable();
            $table->integer('id_moviment_balance')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('accounts');
    }
}
