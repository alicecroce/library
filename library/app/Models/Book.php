<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'user_id',
        'title',
        'pages',
        'year',
        'image'
    ];

    public function author() //specifico la relazione tra author e books
    {
        return $this->belongsTo(Author::class); //belongsTo=appartiene ad author
        //Author::class=prendi tutti i dati dell'user loggato
    }

    public function user()//relazione l'user con book
    {
        return $this->belongsTo(User::class);//un libro "appartiene" ad un utente(che lo ha caricato)
    }
}
