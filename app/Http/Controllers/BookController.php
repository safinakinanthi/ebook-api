<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::get();
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return Book::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "author"=>$request->author,
            "publisher"=>$request->publisher,
            "date_of_issue"=>$request->date_of_issue



        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::find($id);
    }

    
    
    public function update(Request $request, $id)
    {
       $book = Book::find($id);
        if($book){
            $book->title=$request->title;
            $book->description=$request->description;
            $book->author=$request->author;
            $book->publisher=$request->publisher;
            $book->date_of_issue=$request->date_of_issue;
            
            $book->save();
        }
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Book::destroy($id);
    }
}
