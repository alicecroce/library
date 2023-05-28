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
        Schema::table('books', function (Blueprint $table) {
            $table->string('image')->after('year')->nullable();
            //a questa istruzione dico dove sistemare (image) e se sia obbligatorio caricare il file o meno (nullable)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void//istruisce il rollback
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('image');
            //le img non vanno MAI sul db, piuttosto le carichi su un serve e metti nel db solo il percorso
            //dropcolumn indica cosa cancellare, quale colonna in un processo di down 
        });
    }
};

//NB: 1 migrazione=1 colonna
//NB: alla fine carica il tutto con php artisan migrate, FAI UN MIGRATE PER OGNI COLONNA


