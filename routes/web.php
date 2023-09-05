<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panels\TabController;

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

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn () => view('home'))->name('home');
    Route::get('/docs', fn () => view('docs'))->name('docs');
    //Route::get('/bootstrap', [TabController::class,'getBS'])->name('bootstrap');
    Route::get('/bootstrap', fn () => view('panels.tab1bs'))->name('bootstrap');
    Route::get('/daisyui', fn () => view('daisyui'))->name('daisyui');
    Route::get('/flowbite', fn () => view('flowbite'))->name('flowbite');
    Route::get('/preline', fn () => view('preline'))->name('preline');
    Route::get('/rippleui', fn () => view('rippleui'))->name('rippleui');

    Route::get('/tab/{lib}/{id}', [TabController::class,'getTab'])
        ->whereIn('lib', ['bs', 'dui', 'fb', 'prl', 'rui'])
        ->whereNumber('id')
        ->name('tab');

    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});
