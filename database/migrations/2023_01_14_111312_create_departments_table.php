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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id');
            // $table->unsignedBigInteger('dep_id');

            // $table->foreign('dep_id')->references('id')->on('departments')->onDelete('cascade');
            // $table->foreignId('dep_id')->constrained('students');
            // $table->string('name');
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
        Schema::dropIfExists('departmets');
    }
};
