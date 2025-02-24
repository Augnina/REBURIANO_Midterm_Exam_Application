<?php

use App\Http\Controllers\BooksController;

Route::get('/books', [BooksController::class, 'index']);

