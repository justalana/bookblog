<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request -> input('search') != null && $request -> input('search') != ""){
            $books = Book::where('title', 'like', '%'.$request -> input('search').'%') -> orWhere('author', 'like', '%'.$request -> input('search').'%')->get();
        } else {
            $books = Book::all();
        }


//        if($books->genre !== 0){
//            $books->genre = json_decode($books->genre);
//        }
        return view('books', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // GET
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Book $book) //POST
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required'
        ], [
            'title.required' => 'Title is required.',
                'author.required' => 'Author is required.',
                'description.required' => 'Description is required.'
            ]
        );

        // Laravel gives you an array of the selected checkboxes
        $genres = $request->input('genres');

        // Turn array into JSON string, so you can save it in a database column
//        $jsonGenres = json_encode($genres);


        $book->title = $request->input('title');
        $book->user_id = auth()->user()->id;
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->genre = json_encode($genres);

        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $book = Book::find($book->id);
        return view('books.details', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $book = Book::find($book->id);
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->description = $request->input('description');

        $book->update();
        return view('books.details', ['book' => $book]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
