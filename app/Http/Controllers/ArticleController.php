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
}
