<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
//fct qui retourne la page de la liste catégorie 
 public function cat_view(){
    return view('admin.categories.indexcategorie');
 }


 /*

    /**
     * Display a listing of the resource.
     */
   
     public function index()
     {
         $categories = Category::all();
         return view('category.liste')->with('categories', $categories);
     }
     


 /*
  Store a newly created resource in storage.
  */
 public function store(Request $request)
 {
     $request->validate(
         [

             'name'=>'required',
             'desc'=>'required',
         ]
         );






     // Créer une nouvelle instance de la catégorie
     $cat = new Category();
     
     // Assigner les valeurs des champs du formulaire à la catégorie
     $cat->name = $request->input('name');
     $cat->description = $request->input('desc');

     // Sauvegarder la catégorie et retourner un message en fonction du résultat
     if ($cat->save()) {
         return redirect('categories');
     } else {
         return 'Error occurred while adding the category';
     }
 }

 /**
  * Display the specified resource.
  */
 public function show(Category $category)
 {
    
 }

 /**
  * Show the form for editing the specified resource.
  */
 public function edit(Category $category)
 {
     //
 }

 /**
  * Update the specified resource in storage.
  */
 public function update(Request $request, Category $category)
 {
     //
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
