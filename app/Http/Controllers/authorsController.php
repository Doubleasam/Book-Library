<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Book;

class authorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::orderBy('id', 'asc')->paginate(3);
        return view('authors.index')->with('authors', $authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'FirstName' => 'required',
            'LastName' => 'required',
            'Email' => 'required'
        ]);

        $author = new Author;
        $author->FirstName = $request->input('FirstName');
        $author->LastName = $request->input('LastName');
        $author->Email = $request->input('Email');
        $author->save();

        return redirect('/authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::where('author_id', $id)->get();
        return view('authors.show')->with('books', $books);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::find($id);

        // Check for correct user id
        return view('authors.edit')->with('author', $author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'FirstName' => 'required',
            'LastName' => 'required',
            'Email' => 'required'
        ]);

        $author = Author::find($id);
        $author->FirstName = $request->input('FirstName');
        $author->LastName = $request->input('LastName');
        $author->Email = $request->input('Email');
        $author->save();

        return redirect('/authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::find($id);
        $books = Book::where('author_id', $id)->get();
        foreach ($books as $book) {
            $book->delete();
        }
        $author->delete();
        return redirect('/authors');
    }
}
