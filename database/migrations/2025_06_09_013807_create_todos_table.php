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
        Schema::create('todos', function (Blueprint $table) {
            $table->foreign("user")->
            $table->id();
            $table->string('name');
            $table->integer('priority');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};