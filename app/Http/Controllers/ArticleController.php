<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
   
public function CreateArticle(Request $request )
   {
    $data  = $request->all();
     $Article = Article::create($data);
    return $Article;
       
   }

   //metodo para actualizar articulo
   public function UpdateArticle(Request $request)
   {
     $id = $request->id;
      $name = $request->name;
      $description = $request->description;
      $image = $request->image;
      $cost = $request->cost;
      $sale = $request->sale;
      $stock = $request->stock;
      $id_provider = $request->id_provider;
      $id_departament = $request->id_departament;
      $id_status = $request->id_status;
      $edit_user = $request->edit_user;
      $article = Article::where('id', $id);
      if ($article != null) {
         $article->update([
            'name' => $name,
            'description' => $description,
            'image' => $image,
            'cost' => $cost,
            'sale' => $sale,
            'stock' => $stock,
            'id_provider' => $id_provider,
            'id_status' => $id_status,
            'edit_user' => $edit_user
            
         ]);
         return $request->all();
      }
   }
}
