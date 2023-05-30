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
        //protected $fillable=['author', 'title', 'pages','year', 'image','slug'];
        Schema::create('categories', function (Blueprint $table) {
            $table->string('name', 20);
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //questo rollbck cancellerà TUTTA A TABELLA
    {
        Schema::dropIfExists('categories');
    }
};
