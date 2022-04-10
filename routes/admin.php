<?php
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.index');
})->name('home');

Route::group( ['prefix'=>'user', 'as'=>'user.'],function() {

    Route::get('/view-all-users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');
    Route::get('/create-new-user', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('store');
    Route::put('/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update');
    Route::get('/{name}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('edit');
    Route::post('/send-email', [App\Http\Controllers\Admin\UserController::class, 'sendMail'])->name('send-email');
    Route::get('/{id}/show', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('show');
    Route::get('/{name}/show/{id}', [App\Http\Controllers\Admin\UserController::class, 'showfolder'])->name('showfolder');
    Route::get('/{id}/delete', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('delete');
});
