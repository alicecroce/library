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
        Schema::table('books', function (Blueprint $table) { //nella cartella books
            //
            $table->unsignedBigInteger('author_id'); //crea una colonna di numeri interi, non negativi (quindi positivi), big (grande scala di valori)
            $table->foreign('author_id')->references('id')->on('authors'); //foreign=collegamento fra id (di books) e la tabella author

            //oppure
            // $table->foreign('author_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            //
            $table->dropColumn('author_id'); //cancella la colonna
            $table->dropForeign('author_id'); //cancella il collegamento
        });
    }
};
