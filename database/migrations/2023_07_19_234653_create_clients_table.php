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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('address_id')->constrained(); // vincula uma chave estrangeira, buscando o plurar antes do _id, no caso addresses
            $table->foreignId('user_id')->constrained();
            // $table->integer('user_id'); Esse seria o método mais manual de se fazer esta ligação.
            // $table->foreign('user_id')->references('id')->on('users'); 
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
