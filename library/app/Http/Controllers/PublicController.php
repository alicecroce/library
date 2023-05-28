<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
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

    public function store(BookRequest $request)
    //->1. sostituisco a Request BookRequest (INJECTION)- una volta effettuato ciò dovrò cambiare un bel pò di parametri
    {
        //->2. commento la validazione dato che la effettuo già in BookRequest

        // $request->validate([ //valida i dati quando si clicca su Salva
        //     "title" => "required|string",
        //     "pages" => "required|numeric",
        //     "author" => "required",
        //     "year" => "required",

        // ]);

        //->3. Eseguo le seguenti operazioni:
        //a) controllo se esiste un file allegato $request->hasFile('image')
        //b) se il file è stato caricato sul server $request->file('image')
        //c. infine se è sgato correttamente caricato sul server allora lo rendo booleano $request->file('image')->isValid
        $path_image = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
            //storeAs->dove locare
        }


        //Book::create richiama il model Book e quindi il metodo statico create, ciò ci permette di connetterci a Table plus
        //questa seconda parte ci permetterà di caricare i dati nel database

        Book::create([
            "title" => $request->title,
            "pages" => $request->pages,
            "author" => $request->author,
            "year" => $request->year,
            "image" => $path_image,
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
