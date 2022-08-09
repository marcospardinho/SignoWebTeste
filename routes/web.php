<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Controller;
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

Route::controller(ClientController::class)->group(function () {
    Route::post('/logout/client', 'destroy')
                ->name('logout.client');
});

Route::controller(Controller::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');
    Route::post('/storeAdmin', 'storeAdmin')->name('storeCad');
    Route::get('/cadastro', 'register')->name('cadastro');
});

Route::controller(AdminController::class)->group(function () {
    Route::post('/reg', 'store')->name('register.admin');
});

Route::controller(QuestionController::class)->group(function () {
    Route::get('/active/{enquete}/{type}', 'active')->middleware('auth:web')->name('active');
    Route::get('/questions', 'list')->middleware('auth:web')->name('question.index');
    Route::get('/question', 'index')->middleware('auth:web')->name('question.create');
    Route::post('/questionCreate', 'create') ->middleware('auth:web')->name('question.store');
    Route::get('/questionEdit/{question}','edit')->middleware('auth:web')->name('question.edit');
    Route::put('/questionUpdate/{question}','update')->middleware('auth:web')->name('question.update');
    Route::delete('/questionDelete','destroy')->middleware('auth:web')->name('question.destroy');
    Route::get('/questionary/{enquete}', 'questionary')->name('questionary');
    Route::post('/quest/{enquete}', 'storeQuest')->name('questionary.store');
});

Route::controller(AjaxController::class)->group(function (){
    Route::get('/ajax/{enquete}', 'ajax');
    Route::get('/ajaxdet/{enquete}', 'ajaxdet');
});

require __DIR__.'/auth.php';