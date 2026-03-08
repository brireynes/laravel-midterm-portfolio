<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::middleware('portfolio.access')->group(function () {
    Route::get('/', [PortfolioController::class, 'home'])->name('home');
    Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
    Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
    Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
    Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
});