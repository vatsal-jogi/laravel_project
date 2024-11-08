<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller as mycontroller;

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

Route::get('/', function () {
    return view('welcome');
});

 //client
Route::get('/home',[mycontroller::class,'home']);
Route::get('/contact',[mycontroller::class,'contact']);
Route::get('/about',[mycontroller::class,'about']);
Route::get('/Courses',[mycontroller::class,'Courses'])->name('Courses');
Route::get('/create',[mycontroller::class,'create'])->name('create');
Route::post('/store',[mycontroller::class,'store'])->name('store');
Route::get('/login',[mycontroller::class,'login'])->name('login');
Route::get('/signup',[mycontroller::class,'signup'])->name('signup');
Route::post('/storesign',[mycontroller::class,'storesign'])->name('store.sign');
Route::get('/admission',[mycontroller::class,'admission'])->name('admission');
Route::get('/success',[mycontroller::class,'success'])->name('success');

//courses
Route::get('/tdme',[mycontroller::class,'tdme'])->name('tdme');
Route::get('/bdcp',[mycontroller::class,'bdcp'])->name('bdcp');
Route::get('/dm',[mycontroller::class,'dm'])->name('dm');
Route::get('/dme',[mycontroller::class,'dme'])->name('dme');
Route::get('/draughtsman',[mycontroller::class,'draughtsman'])->name('draughtsman');
Route::get('/ee',[mycontroller::class,'ee'])->name('ee');
Route::get('/fitterengineering',[mycontroller::class,'fitterengineering'])->name('fitterengineering');
Route::get('/fvp',[mycontroller::class,'fvp'])->name('fvp');
Route::get('/ite',[mycontroller::class,'ite'])->name('ite');
Route::get('/lmm',[mycontroller::class,'lmm'])->name('lmm');
Route::get('/mdme',[mycontroller::class,'mdme'])->name('mdme');
Route::get('/me',[mycontroller::class,'me'])->name('me');
Route::get('/mie',[mycontroller::class,'mie'])->name('mie');
Route::get('/pumpoperator',[mycontroller::class,'pumpoperator'])->name('pumpoperator');
Route::get('/secretarial',[mycontroller::class,'secretarial'])->name('secretarial');
Route::get('/te',[mycontroller::class,'te'])->name('te');
Route::get('/apply',[mycontroller::class,'apply'])->name('apply');


//admin
Route::get('/index',[mycontroller::class,'index'])->name('admin.index');
Route::get('/view',[mycontroller::class,'view'])->name('admin.view');
Route::get('/signview',[mycontroller::class,'signview'])->name('admin.signview');
Route::post('/login',[mycontroller::class,'loginy'])->name('loginy');

//admiss
Route::post('/data',[mycontroller::class,'data'])->name('data');
Route::post('/dataview',[mycontroller::class,'dataview'])->name('dataview');




//delete
Route::delete('/destroy/{id}',[mycontroller::class,'destroy'])->name('admin.destroy');

//update registration
Route::get('/edit/{id}',[mycontroller::class,'edit'])->name('admin.edit');
Route::put('/update/{id}',[mycontroller::class,'update'])->name('admin.update');

//update signup
Route::get('/editsign/{id}',[mycontroller::class,'editsign'])->name('admin.editsign');
Route::put('/updates/{id}',[mycontroller::class,'updates'])->name('admin.updates');

//delete sign
Route::delete('/destroys/{id}',[mycontroller::class,'destroys'])->name('admin.destroys');

//test
Route::get('/test',[mycontroller::class,'test'])->name('test');
