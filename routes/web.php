<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

// お問い合わせ入力ページ
Route::get('/',[ContactController::class, 'index']);
Route::get('/', function () {
    return view('index');
});

// 確認ページ
Route::cpost('/confirm', [ContactsController::class, 'confirm']);

// DB挿入
Route::post('/process', [ContactsController::class, 'process']);

// 完了ページ
Route::get('/complete', [ContactsController::class, 'complete']);

