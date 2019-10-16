<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books=Book::all();
        return view('books.show')->with('books',$books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add books
        return view ('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'book_id' => 'required',
            'author' => 'required',
            'price' => 'required',
            'avail' => 'required',
            'shelf_no' => 'required',
            'copies' => 'required',
            'lang' => 'required',
            'genre'=>'required'
            
            //'cover_image' => 'image|nullable|max:1999'
        ]);

        //input


        //for ($i=0; $i<$request->input('copies'); i++)
        $s = new Book;
        $s->title = $request->input('name');
        $s->book_code = $request->input('book_id');
        $s->author = $request->input('author');
        $s->price = $request->input('price');
        if ($request->input('avail')=='yes')
            $pass=true;
        else
            $pass=false;
        $s->availability = $pass;
        $s->shelf_no = $request->input('shelf_no');
        $s->copies = $request->input('copies');
        $s->lang = $request->input('lang');
        $s->body = $request->input('genre');

        //@endfor


        
        //$s->user_id = auth()->user()->id;
        //$s->cover_image = $fileNameToStore;
        $s->save();

        return redirect('/books')->with('success', 'Book details added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $b=Book::find($id);
        

        
        return view ('books.update')->with('b', $b);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
