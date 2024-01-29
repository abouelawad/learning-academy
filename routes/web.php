<?php

use App\Http\Controllers\Admin ;
use App\Http\Controllers\Guest ;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Guest\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::group([],function(){
  Route::get('/trial', [Guest\HomeController::class,'index'])->name('guest.homepage');
  Route::get('categories/{category}' , [CourseController::class  , 'index'])->name('guestCategories.index');
  Route::get('categories/{category}/course/{course}' , [CourseController::class  , 'show'])->name('guestCategoriesCourse.show');

});


Route::group(['prefix'=>'dashboard','namespace'=> 'Admin'], function (){
  Route::get('/',[DashboardController::class, 'index'])->name('admin.index');
  Route::get('admin/login',[AuthController::class, 'login'])->name('admin.login');

});