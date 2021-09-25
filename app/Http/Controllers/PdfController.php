<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    // create pdf view page
    public function CreatePdf()
    {
       
        return view('pdf.CreatePdf');
    }
   
    
}
