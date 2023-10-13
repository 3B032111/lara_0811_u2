<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome') ;//git practice 1-1 test view and commit
});
Route::get('/', function () {
    return 'welcome';//git practice 1-2 test show welcome
});
Route::get('r1', function() {  //git practice 1-3  redirect routes r1 to r2
    return redirect('r2');
});
Route::get('r2', function() {
    return view('welcome');
});
Route::get('hello/{name?}', function($name) { //git practice 2-1 and 2-2 hello tom
    return 'Hello, '.$name;
});
Route::get('hello/{name?}', function($name='Everybody') {//git practice 2-3 and 2-4 hello everybody/tom
    return 'Hello, '.$name;
})->name('hello.index');//git practice 4-1 4-2 Route=hello.index
