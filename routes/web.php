<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PortafolioController;
use Illuminate\Support\Facades\Route;


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
//     $nombre = 'Jorge';
//     return view('home',compact('nombre'));
// })->name('home');

// $portafolio = [
//     ['title' => 'Proyecto #1'],
//     ['title' => 'Proyecto #2'],
//     ['title' => 'Proyecto #3'],
//     ['title' => 'Proyecto #4']
// ];


Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
// Route::view('/portafolio','portafolio',compact('portafolio'))->name('portafolio');
Route::view('/contact','contact')->name('contact');

Route::post('contact',[MessagesController::class,'store']);

Route::get('/portafolio',[PortafolioController::class,'index'])->name('portafolio.index');
Route::get('/portafolio/crear',[PortafolioController::class,'create'])->name('portafolio.create');
Route::post('/portafolio',[PortafolioController::class,'store'])->name('portafolio.store');
Route::get('/portafolio/{project}',[PortafolioController::class,'show'])->name('portafolio.show');


// Route::resource('proyects',PortafolioController::class);



