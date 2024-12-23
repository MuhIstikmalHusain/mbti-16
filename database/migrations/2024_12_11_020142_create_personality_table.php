<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('personality', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('description');
            $table->text('karakteristik');
            $table->text('karrier');
            $table->string('image');
            $table->string('icon');
            $table->timestamps();
        }); 
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personality');
    }
};
