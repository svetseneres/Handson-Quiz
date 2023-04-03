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
        Schema::create('residents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname')->default();
            $table->string('lname')->default();
            $table->integer('age');
            $table->string('sex')->default();
            $table->integer('bdate');
            $table->text('bplace');
            $table->text('address');
            $table->integer('contactno');
            $table->text('email');
            $table->string('occupation')->default();
            $table->text('religion');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->softDeletes(); 
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
        Schema::dropIfExists('residents');
    }
};
