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
        return view ('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $creator_id = $request->input('created_id');
        $amount = $request->input('amount');
        $published_date = $request->input('published_date');
        $data = new Book();
        $data->title = $title;
        $data->creator_id =  $creator_id;
        $data->amount =  $amount;
        $data->published_date =  $published_date;
        $data->save();

        return redirect('/book');      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $books = Book::find($id);
        return view ('book.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $title = $request->input('title');
        $creator_id = $request->input('created_id');
        $amount = $request->input('amount');
        $published_date = $request->input('published_date');
        $data = Book::find($id);
        $data->title = $title;
        $data->creator_id =  $creator_id;
        $data->amount =  $amount;
        $data->published_date =  $published_date;
        $data->save();
        return redirect('/book');      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $books = Book::find($id);
        $books->delete();
        // return response()->json($faculties);
        return redirect('/book');    
    }
}
