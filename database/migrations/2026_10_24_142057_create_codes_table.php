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
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->fillable(); // The name displayed on the list for this part of the code
            $table->text('code_snippet'); // The snippet of code we're looking at; 
            $table->text('description'); // A description of the code itself; will likely be in HTML
            $table->string('url'); // The URL of the page 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codes');
    }
};
