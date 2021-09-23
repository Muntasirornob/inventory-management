<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Auth;
 use App\Http\Controllers\DashboardController;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\Auth\LoginController as Userlogin ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
// return view('login.index');
// });

// auth route for both
// Route::group(['middleware'=>['auth']], function(){
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// });

Auth::routes();

 Route::get('/', [HomeController::class, 'index'])->name('home');


