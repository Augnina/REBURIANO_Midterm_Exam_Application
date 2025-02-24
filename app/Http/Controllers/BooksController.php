<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'The Gift of Everything', 'price' => 1200, 'genre' => 'Romance'],
            ['title' => 'Others were Emeralds', 'price' => 800, 'genre' => 'Novel'],
            ['title' => 'Lullabies', 'price' => 150, 'genre' => 'poetry'],
            ['title' => 'Sea of Strangers', 'price' => 90, 'genre' => 'Fiction']
        ];

        return view('books', compact('books'));
    }
}
