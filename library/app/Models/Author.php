<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'birth'];

    protected $casts = [ //richiama la variabile esattamente per come la richiedo, è connesso con "format" presente nell'edit.blade.php
        'birth' => 'datetime',
    ];
}//L'ho estrapolato da user.php dentro il model
