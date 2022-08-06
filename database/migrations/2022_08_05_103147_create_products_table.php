<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('idcp')->nullable();
            $table->string('ticker')->nullable();
            $table->string('nazov')->nullable();
            $table->string('url')->nullable();
            $table->string('price')->nullable();
            $table->string('change_percent')->nullable();
            $table->string('rsi')->nullable();
            $table->string('pe_ratio')->nullable();
            $table->string('macd')->nullable();
            $table->string('volume')->nullable();
            $table->string('high52Wk')->nullable();
            $table->string('performances_hodnota1')->nullable();
            $table->string('performances_hodnota2')->nullable();
            $table->string('performances_hodnota3')->nullable();
            $table->string('performances_hodnota4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
