<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()

    {
        $books=Book::orderby('id','DESC')->paginate(10);
        return view('back.books.books',compact('books'));
    }


    public function create()
    {
        $books=Book::all()->pluck('name','id');
        return view('back.books.create',compact('books'));
    }


}
