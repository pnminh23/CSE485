<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::dropIfExists('students');
        Schema::create('students',function(Blueprint $table){
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("phone_number");
            $table->unsignedBigInteger('myclass_id');
            $table->foreign('myclass_id')->references('id')->on('myclasses')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
