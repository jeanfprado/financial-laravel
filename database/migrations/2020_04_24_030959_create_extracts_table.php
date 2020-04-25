<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dua_at');
            $table->decimal('amount',8,2);
            $table->boolean('settled')->default(0);
            $table->date('settled_at')->nullable;
            $table->enum('type',['receive', 'expense']);

            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
                        
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('extracts');
    }
}
