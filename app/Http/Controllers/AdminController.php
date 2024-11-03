<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $books = Book::all();

        return view('admin.index', compact('books'));
    }

    public function update(string $id){
        $book = Book::find($id);
        $book->active = !$book->active;
        $book->save();

        return redirect(route('admin.index'));
    }
}
