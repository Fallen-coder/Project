<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Models\Post;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ContactController;
//just for testing
Route::get('/test', function () {
    return view('test');
});


Route::get('/', function () { 
    return view('dashboard', ['posts' => Post::all()]);
})->name('dashboard');

Route::get('/about', [ExtraController::class, 'about'])->name('about');

// Contact route
Route::get('/contact', [ExtraController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Post routes
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    
    // Comment routes

    Route::post('/comments/{post}', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comment.edit');
    Route::put('/comments/{comment}/update', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/comments/{comment}/destroy', [CommentController::class, 'destroy'])->name('comment.destroy');

});

require __DIR__.'/auth.php';
