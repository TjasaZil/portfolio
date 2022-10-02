<?php

use App\Http\Controllers\SkillsController;
use App\Mail\ContactedMessage;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::post("contact", [ContactController::class, "contact"])
->name("contact");
Route::get("/contact", function(){
    return Inertia::render("Contact");
})->name("contact");

//Route::post("skills", [SkillsController::class, "skills"])->name("skills");
//Route::post("projects", [ProjectsController::class, "projects"])->name("projects");

Route::get("/skills", function(){
    return Inertia::render("Skills");
})->name("skills");

Route::get("/projects", function(){
    return Inertia::render("Projects");
})->name("projects");

//Route::get("/test", function(){
  //  return new ContactedMessage("name", "mail@mail.com", "subject", "this is a message");
//});
