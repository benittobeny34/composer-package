<?php


use Benitto\Crud\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => "Benitto\Crud\Http\Controllers"],function() {
    Route::get('create-post',[PostController::class,'index'])->name('post.index');
    Route::post('create-post',[PostController::class,'store'])->name('post.store');
});
