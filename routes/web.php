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

Route::get('/fitur', function () {
    return view('pages.fitur');
})->name('fitur');

Route::get('/solusi', function () {
    return view('pages.solutions');
})->name('solutions');

Route::get('/harga', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

// Registration Page
Route::get('/register', function () {
    return view('pages.register');
})->name('register');

// Login Page
Route::get('/login', function () {
    return view('pages.login');
})->name('login');

// Login Ketua Divisi
Route::get('/login/ketua-divisi', function () {
    return view('pages.login-ketua');
})->name('login.ketua');

// Login Anggota Divisi
Route::get('/login/anggota-divisi', function () {
    return view('pages.login-anggota');
})->name('login.anggota');

// Auth routes
Route::middleware('auth')->group(function () {
    // Dashboard / Command Center
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // Core Pages
    Route::get('/events', function () { return view('events.index'); })->name('events');
    Route::get('/planning', function () { return view('planning.index'); })->name('planning');
    Route::get('/organization', [App\Http\Controllers\OrganizationController::class, 'index'])->name('organization');
    Route::post('/organization', [App\Http\Controllers\OrganizationController::class, 'store'])->name('organization.store');
    Route::put('/organization/division/{id}', [App\Http\Controllers\OrganizationController::class, 'updateDivision'])->name('organization.division.update');
    Route::delete('/organization/division/{id}', [App\Http\Controllers\OrganizationController::class, 'destroyDivision'])->name('organization.division.destroy');
    Route::post('/organization/division/reorder', [App\Http\Controllers\OrganizationController::class, 'reorderDivision'])->name('organization.division.reorder');
    
    Route::post('/organization/member/move', [App\Http\Controllers\OrganizationController::class, 'moveMember'])->name('organization.member.move');
    Route::post('/organization/member', [App\Http\Controllers\OrganizationController::class, 'storeMember'])->name('organization.member.store');
    Route::delete('/organization/member/{id}', [App\Http\Controllers\OrganizationController::class, 'destroyMember'])->name('organization.member.destroy');
    
    Route::get('/divisions', function () { return view('divisions.index'); })->name('divisions');
    Route::get('/gueststar', function () { return view('gueststar.index'); })->name('gueststar');
    Route::get('/fee', function () { return view('fee.index'); })->name('fee');
    Route::get('/timeline', function () { return view('timeline.index'); })->name('timeline');
    Route::get('/budget', function () { return view('budget.index'); })->name('budget');
    Route::get('/approval', function () { return view('approval.index'); })->name('approval');
    Route::get('/vendors', function () { return view('vendors.index'); })->name('vendors');
    Route::get('/documents', function () { return view('documents.index'); })->name('documents');
    Route::get('/realization', function () { return view('realization.index'); })->name('realization');
    Route::get('/reports', function () { return view('reports.index'); })->name('reports');
    Route::get('/evaluation', function () { return view('evaluation.index'); })->name('evaluation');
    Route::get('/knowledge-base', function () { return view('knowledge-base.index'); })->name('knowledge-base');
    Route::get('/ai-assistant', function () { return view('ai-assistant.index'); })->name('ai-assistant');
    Route::get('/settings', function () { return view('settings.index'); })->name('settings');
    Route::get('/support', function () { return view('support.index'); })->name('support');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
