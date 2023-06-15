<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all(); //ottiene tutte le righe (record) presenti
        return view('category.index', ['category' => $category]); //puoi sostituire con un compact
    }

    public function create()
    {
        return view('category.create'); //crea un form per aggiungere categorie
    }

    public function store(CatRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        // ]);

        //category::create richiama il model Book e quindi il metodo statico create, ciò ci permette di connetterci a Table plus
        //questa seconda parte ci permetterà di caricare i dati nel database
        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('category.index')->with('success', 'messaggino carino che conferma il caricamento');
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(CatRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index')
            ->with('success', 'Modifica avvenuta con successo!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')
            ->with('success', 'Cancellazione avvenuta con successo!');
    }
}
