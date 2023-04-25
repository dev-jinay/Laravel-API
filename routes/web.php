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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\SignupController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\SignupController::class, 'create'])->name('register.create');
Route::get('/see-action', [App\Http\Controllers\HomeController::class, 'seeAction'])->name('page.see-action');
Route::get('/talentai/success_stories', [App\Http\Controllers\TalentAiController::class, 'successStories'])->name('page.success-stories');
Route::get('/talentai/our_clients_work', [App\Http\Controllers\TalentAiController::class, 'ourClientsWork'])->name('page.our-clients-work');
Route::get('/talentai/home', [App\Http\Controllers\TalentAiController::class, 'index'])->name('page.talentai-index');
Route::get('/usecase', [App\Http\Controllers\HomeController::class, 'useCase'])->name('use-case');
Route::get('/how-it-work', [App\Http\Controllers\HomeController::class, 'howItWork'])->name('how-it-work');
Route::get('/talent', [App\Http\Controllers\HomeController::class, 'talent'])->name('talent');
Route::get('/employer', [App\Http\Controllers\HomeController::class, 'employer'])->name('employer');
Route::get('/recruiter', [App\Http\Controllers\HomeController::class, 'recruiter'])->name('recruiter');
Route::get('/start-up', [App\Http\Controllers\HomeController::class, 'startUp'])->name('start-up');
Route::get('/personals', [App\Http\Controllers\HomeController::class, 'personals'])->name('personals');
