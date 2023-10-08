<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->middleware('auth');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Show the feedback form
Route::get('/feedback', 'FeedbackController@showForm')->name('feedback.form');

// Handle feedback submission
Route::post('/feedback', 'FeedbackController@store')->name('feedback.store');

// Show the feedback form
Route::get('/feedback', 'FeedbackController@showForm')->name('feedback.form');

// Show the list of feedback submissions
Route::get('/feedback/list', 'FeedbackController@list')->name('feedback.list');

// Upvote a feedback submission
Route::post('/feedback/upvote/{id}', 'FeedbackController@upvote')->name('feedback.upvote');

// Downvote a feedback submission
Route::post('/feedback/downvote/{id}', 'FeedbackController@downvote')->name('feedback.downvote');

Route::middleware('auth')->group(function () {
    // Upvote a feedback submission
    Route::post('/feedback/upvote/{id}', 'FeedbackController@upvote')->name('feedback.upvote');

    // Downvote a feedback submission
    Route::post('/feedback/downvote/{id}', 'FeedbackController@downvote')->name('feedback.downvote');
});
// Create a comment
Route::post('/comments', 'CommentController@store')->name('comments.store');

// List comments for a specific content
Route::get('/comments/{content_id}', 'CommentController@index')->name('comments.index');

// Delete a comment
Route::delete('/comments/{id}', 'CommentController@destroy')->name('comments.destroy');
// View user profile
Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin routes here
});
