<?php

use Illuminate\Support\Facades\Route;

Route::get('/diary', [App\Http\Controllers\DiaryController::class, 'index'])->name('diary.index');
Route::get('/diary/create', [App\Http\Controllers\DiaryController::class, 'create'])->name('diary.create');
Route::post('/diary', [App\Http\Controllers\DiaryController::class, 'store'])->name('diary.store');
Route::get('diary/{id}', [App\Http\Controllers\DiaryController::class, 'show'])->name('diary.show');
Route::get('/diary/{id}/edit', [App\Http\Controllers\DiaryController::class, 'edit'])->name('diary.edit');
Route::patch('/diary/{id}', [App\Http\Controllers\DiaryController::class, 'update'])->name('diary.update');
Route::delete('/diary/{id}', [App\Http\Controllers\DiaryController::class, 'destroy'])->name('diary.destroy');

