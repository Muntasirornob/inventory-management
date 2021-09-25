<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  // add Product view page
  public function AddProduct()
  {
     
      return view('product.AddProduct');
  }
 
  // product list View page
  public function ProductList()
  {
     
      return view('product.ProductList');
  }
}
