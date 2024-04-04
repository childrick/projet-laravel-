<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoriescontroller extends Controller
{

    public function __construct(){
        $this->middleware("auth");
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        //la fonction compact sert a transmettre les variables vers la vue
        return view("admin.categories.index",compact("categories"));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //securité: controle sie les champs
$request->validate([
        "name"=>"required|max:100|unique:categories"
    ]);
        //insertion dans la base de donnée
category::create($request->all());
//redirection vers la page liste avec l'envoi d'un message de succes
//with envoi des variables sous forment de session flash
        return redirect()->route("categories.index")->with("message","une nouvelle categorie est ajoutée avec succès!");
        //methose pour afficher les tableaux en php laravel : dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view("admin.categories.edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'nom' => 'required',
            ]);
            //mise a jour avec log
            $category->update($request->all());
            return redirect()->route("categories.index")->with("message","La categorie est modifiéé avec succès!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route("categories.index")->with("message","une categorie est supprimeée avec succès!");

    }
}
