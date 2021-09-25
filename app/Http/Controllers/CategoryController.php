<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   // add Category view page
   public function AddCategory()
   {
      
       return view('category.AddCategory');
   }
  
   // Category list View page
   public function CategoryList()
   {
      
       return view('category.CategoryList');
   }
}
