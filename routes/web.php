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

Route::get('/', \App\Http\Livewire\Customer\ListCustomer::class)->name("list-customer");
Route::get('/customer/new', \App\Http\Livewire\Customer\AddCustomer::class)->name("add-customer");
Route::get('customer/edit/{customer}', \App\Http\Livewire\Customer\AddCustomer::class)->name("edit-customer");
