<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\author;
use     JWTAuth;
class AuthorController extends Controller
{
     public function __construct() {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return author::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         return author::create([
 "name"=>$request->name,
            "date_of_birth"=>$request->date_of_birth,
            "place_of_birth"=>$request->place_of_birth,
            "gender"=>$request->gender,
            "email"=>$request->email,
            "hp"=>$request->hp,
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
        return author::find($id);
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
        $author = author::find($id);
        if($author){
            $author->name=$request->name;
            $author->date_of_birth=$request->date_of_birth;
            $author->place_of_birth=$request->place_of_birth;
            $author->gender=$request->gender;
            $author->email=$request->email;
            $author->hp=$request->hp;
            $author->save();
        }
        return $author;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return author::destroy($id);
    }
}
