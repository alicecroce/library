<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all(); //ottiene tutti i record presenti nella tabella author
        return view('authors.index', ['authors' => $authors]); //può diventare return view('books.index', compact ('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        Author::create([
            "name" => $request->name,
            "surname" => $request->surname,
            "birth" => $request->birth,

        ]);

        return redirect()->route('authors.index')->with('success', 'Libro caricato correttamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {

        $author->update([
            'name' => $request->input('name'),
            'surname' => $request->surname,
            'birth' => $request->birth,
        ]);

        return redirect()->route('authors.index')
            ->with('success', 'Modifica avvenuta con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')
            ->with('success', 'Cancellazione avvenuta con successo!');
    }
}
