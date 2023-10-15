<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ISBN' => 'required|string|min:13|max:13',
            'Judul' => 'required|string',
            'Halaman' => 'required|integer',
            'Penerbit' => 'required|string',
        ]);

        $book = Book::create([
            'ISBN' => $validated['ISBN'],
            'Judul' => $validated['Judul'],
            'Halaman' => $validated['Halaman'],
            'Penerbit' => $validated['Penerbit'],
        ]);
        return $book;
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return redirect()->route('books.index')->with('success', 'Book added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
