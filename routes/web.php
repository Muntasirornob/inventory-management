<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Auth;
 use App\Http\Controllers\DashboardController;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\UserController;
 use App\Http\Controllers\CategoryController;
 use App\Http\Controllers\ProductController;
 use App\Http\Controllers\PdfController;
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



// super admin
Route::get('/add/admin', [UserController::class, 'AddAdmin'])->name('add.admin');
Route::get('/admin/list', [UserController::class, 'AdminList'])->name('admin.list');
Route::get('/edit/admin/{id}', [UserController::class, 'EditAdmin'])->name('EditAdmin');
Route::post('/update/admin/{id}', [UserController::class, 'UpdateAdmin'])->name('UpdateAdmin');
Route::get('/delete/admin/{id}', [UserController::class, 'DeleteAdmin'])->name('DeleteAdmin');
Route::get('/add/manager', [UserController::class, 'AddManager'])->name('add.manager');
Route::get('/manager/list', [UserController::class, 'ManagerList'])->name('manager.list');
Route::get('/add/category',  [CategoryController::class, 'AddCategory'])->name('add.category');
Route::get('/category/list', [CategoryController::class, 'CategoryList'])->name('category.list');
Route::get('/add/product',   [ProductController::class,   'AddProduct'])->name('add.product');
Route::get('/product/list',  [ProductController::class, 'ProductList'])->name('product.list');
Route::get('/create/pdf',    [PdfController::class,   'CreatePdf'])->name('create.pdf');

Route::post('/add/admin', [UserController::class, 'StoreAdmin'])->name('StoreAdmin');
Route::post('/add/manager', [UserController::class, 'StoreManager'])->name('StoreManager');
Route::get('/edit/manager', [UserController::class, 'EditManager'])->name('EditManager');



