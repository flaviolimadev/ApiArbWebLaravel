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
        Schema::create('sures', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(0);
            $table->string('lucro')->nullable();
            $table->string('evento')->nullable();
            $table->dateTime('quando')->nullable();
            $table->string('esport')->nullable();
            $table->string('casa01')->nullable();
            $table->string('mercado01')->nullable();
            $table->longText('link01')->nullable();
            $table->string('descricao01')->nullable();
            $table->string('minorc01')->nullable();
            $table->integer('Odd01')->nullable();
            $table->string('casa02')->nullable();
            $table->longText('link02')->nullable();
            $table->string('mercado02')->nullable();
            $table->string('descricao02')->nullable();
            $table->string('minorc02')->nullable();
            $table->integer('Odd02')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sures');
    }
};
