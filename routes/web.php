<?php

use App\Livewire\AllUsers;
use App\Livewire\Counter;
use App\Livewire\DropDown;
use App\Livewire\FileUpload;
use App\Livewire\Registeruser;
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

Route::view('/', 'welcome');

Route::get('/counter', Counter::class);

Route::get('/register', Registeruser::class);

Route::get('/dropdown', DropDown::class);

Route::get('/fileupload', FileUpload::class);

Route::get('/users', AllUsers::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
