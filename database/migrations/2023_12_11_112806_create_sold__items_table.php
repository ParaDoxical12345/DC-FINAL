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
        Schema::create('sold__items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('merchandise_id')->unsigned();
            $table->bigInteger('sale_id')->unsigned();
            $table->integer('qty');
            $table->decimal('selling_price',8,2);
            $table->foreign('merchandise_id')->references('id')->on('merchandises')->onDelete('cascade');
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sold__items');
    }
};
