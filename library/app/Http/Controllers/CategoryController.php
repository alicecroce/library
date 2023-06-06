<?php

namespace App\Http\Controllers;

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
        return view('category.crea'); //crea un form per aggiungere categorie
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        //category::create richiama il model Book e quindi il metodo statico create, ciò ci permette di connetterci a Table plus
        //questa seconda parte ci permetterà di caricare i dati nel database
        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }
}
