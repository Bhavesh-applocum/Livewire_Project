<?php

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

Route::get('/counter', function () {
    return view('welcome');
})->name('counter');

Route::get('calculator', \App\Http\Livewire\Calculator::class)->name('calculator');

Route::get('todo-list', \App\Http\Livewire\TodoList::class)->name('todo-list');

Route::get('cascading-dropdown', \App\Http\Livewire\CascadingDropdown::class)->name('cascading-dropdown');

Route::get('products', \App\Http\Livewire\ProductSearch::class)->name('products');