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
        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();

            // ! crea una chiave esterna per article -> article_id
            $table->unsignedBigInteger('article_id'); // ! prima creo il vincolo
            $table->foreign('article_id')->references('id')->on('articles'); // ! creo la chiave esterna
            
            // ! crea una chiave esterna per tag -> tag_id
            $table->foreignId('tag_id')->constrained(); // ! crea una colonna e il vincolo in un unico passaggio
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_tag');
    }
};
