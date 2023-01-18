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
        Schema::create('students', function (Blueprint $table) {
            
            $table->string('cnic',15)->primary();
            $table->string('name',35);
            $table->string('address',75);
            $table->string('telno',15);
            $table->double('age');
            $table->boolean('marital_status')->default(false);

            // $table->unsignedBigInteger('dep_id');

            // $table->foreign('dep_id')->references('id')->on('departments')->onDelete('cascade');

            // $table->foreignId('dep_id')->constrained('deparments');

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
        Schema::dropIfExists('students');
    }
};
