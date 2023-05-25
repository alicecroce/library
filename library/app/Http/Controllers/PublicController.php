<?php

namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $books = Book::all(); //ottiene tutti i record presenti nella tabella books
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create'); //crea un form per l'inserimento del libro
    }

    public function store(Request $request)
    {

        $request->validate([ //valida i dati quando si clicca su Salva
            "title" => "required|string",
            "pages" => "required|numeric",
            "author" => "required",
            "year" => "required",

        ]);

        //Book::create richiama il model Book e quindi il metodo statico create, ciò ci permette di connetterci a Table plus
        //questa seconda parte ci permetterà di caricare i dati nel database

        Book::create([
            "title" => $request->title,
            "pages" => $request->pages,
            "author" => $request->author,
            "year" => $request->year,
        ]);

        return redirect()->route('books.index')->with('success', 'Libro caricato correttamente!');
    }

    public function show(Book $book)
    {
        // $mybook = Book::find($book);  METODO 1

        // if (is_null($mybook)) { METODO 2
        //     abort(404);
        // }

        //$mybook = Book::findOrFail($book); METODO 3

        return view('books.show', compact('book')); //si usa al posto di questo ['ciccio' => $ginogini] SE E SOLO SE chiave e valore sono identici, in questo esempio non lo sono quindi non si potrà utilizzare, questo NO
    }
}
