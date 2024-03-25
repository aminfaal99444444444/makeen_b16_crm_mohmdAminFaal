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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('color');
            $table->text('tozihat');
            $table->enum('daste_bndi',['دیجیتال','پوشاک','اسباب بازی','زیورالات و اکسسوری']);
            $table->enum('tedad',['1','2','3','4']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
