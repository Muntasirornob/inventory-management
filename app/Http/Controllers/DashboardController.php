<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->hasRole('user')){
            return view ('userdash');
        }elseif(Auth::user()->hasRole('admin')){
            return view ('admin.index');
        }elseif(Auth::user()->hasRole('super_admin')){
            return view ('superdash');
        }
        return view('admin.index');
    }
    public function myprofile()
    {
        return view ('myprofile');
    }
    public function postcreate()
    {
        return view ('postcreate');
    }

}
