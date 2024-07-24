<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


 /*

    /**
     * Display a listing of the resource.
     */
   
     public function index()
     {
         $categories = Category::All();
         return view('admin.categories.index',compact('categories'));}
     


 /*
  Store a newly created resource in storage.
  */
  public function store(Request $request)
  {
      // Valide les données
      $request->validate([
          'name' => 'required|string|max:255',
          'details' => 'required|string',
      ]);

      // Crée une nouvelle catégorie
      Category::create([
          'name' => $request->input('name'),
          'details' => $request->input('details'),
      ]);

      // Redirige vers la vue de l'index des catégories
      return redirect()->route('categories.index');
  }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }


 
 /**
  * Display the specified resource.
  */
 public function show(Category $category)
 {
    return view ('admin.categories.show',compact('category'));
 }

 /**
  * Show the form for editing the specified resource.
  */
 public function edit(Category $category)
 {
    return view ('admin.categories.edit',compact('category'));
 }

 /**
  * Update the specified resource in storage.
  */
 // Met à jour une catégorie
 public function update(Request $request, $id)
 {
     $request->validate([
         'name' => 'required|string|max:255',
         'details' => 'required|string',
     ]);

     $category = Category::findOrFail($id);
     $category->update([
         'name' => $request->input('name'),
         'details' => $request->input('details'),
     ]);

     return redirect()->route('categories.index');
 }


 /**
  * Remove the specified resource from storage.
  */
 public function destroy($id)
 {
     $categorie = Category::find($id);
    
  
     if ($categorie->delete()) {
         return redirect('categories');
     } else {
         return 'Error occurred while adding the category';
     }
 
 
 
 }
 


}
