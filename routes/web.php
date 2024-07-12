<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('home');
});

Route::get('/leads/export', [LeadController::class, 'export'])->name('leads.export');
Route::post('/leads/import', [LeadController::class, 'import'])->name('leads.import');
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('leads', LeadController::class);
    Route::resource('templates', TemplateController::class);
    Route::post('/leads/import', [LeadController::class, 'import'])->name('leads.import');
    Route::get('/leads/export', [LeadController::class, 'export'])->name('leads.export');
    Route::get('/emails/send', [EmailController::class, 'showSendEmailForm'])->name('emails.sendForm');
    Route::post('/emails/send', [EmailController::class, 'sendEmails'])->name('emails.send');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});








require __DIR__.'/auth.php';
