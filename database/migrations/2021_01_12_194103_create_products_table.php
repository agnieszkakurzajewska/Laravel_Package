<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    public function up(){

        Schema::create('products', function (Blueprint $table) {
            $table->string('name')->default('');
            $table->id();
            $table->integer('amount')->default('');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('products');
    }
}
