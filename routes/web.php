<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Coordination — Web Routes
|--------------------------------------------------------------------------
*/

// Landing Page (Public)
Route::get('/', function () {
    return view('pages.landing');
})->name('landing');

// Dashboard / Command Center
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Core Pages
Route::get('/events', function () {
    return view('events.index');
})->name('events');

Route::get('/planning', function () {
    return view('planning.index');
})->name('planning');

Route::get('/organization', function () {
    return view('organization.index');
})->name('organization');

Route::get('/divisions', function () {
    return view('divisions.index');
})->name('divisions');

Route::get('/timeline', function () {
    return view('timeline.index');
})->name('timeline');

Route::get('/budget', function () {
    return view('budget.index');
})->name('budget');

Route::get('/approval', function () {
    return view('approval.index');
})->name('approval');

Route::get('/vendors', function () {
    return view('vendors.index');
})->name('vendors');

Route::get('/documents', function () {
    return view('documents.index');
})->name('documents');

Route::get('/realization', function () {
    return view('realization.index');
})->name('realization');

Route::get('/reports', function () {
    return view('reports.index');
})->name('reports');

Route::get('/evaluation', function () {
    return view('evaluation.index');
})->name('evaluation');

Route::get('/knowledge-base', function () {
    return view('knowledge-base.index');
})->name('knowledge-base');

Route::get('/ai-assistant', function () {
    return view('ai-assistant.index');
})->name('ai-assistant');

Route::get('/settings', function () {
    return view('settings.index');
})->name('settings');

// Auth routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
