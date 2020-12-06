<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Models\Book;

use Validator;
use File;
use Image;
use Auth;
use View;
use Storage;

class BookManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.books');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('book.addbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentUser = Auth::user()->id;
        $validator = Validator::make(
            $request->all(),
            [
                'book_name'             => 'required|max:255',
                'book_date'             => 'required',
                'book_cost'             => 'required',
                'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'book_name.required'                    => 'Book Name is required',
                'book_date.required'                    => 'Book Date is required',
                'book_cost.required'                    => 'Book Date is required',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
        $imageName = time().'.'.$request->book_image->extension();  
     
        $request->book_image->move(public_path('images'), $imageName);

        $book = Book::create([
            'book_name'                      => $request->input('book_name'),
            'author_id'                      => $currentUser,
            'cost'                           => $request->input('book_cost'),
            'file_path'                      => $request->input('book_image'),
            'published_date'                 => $request->input('book_date'),
            ]);


       $book->save();
       $name = $request->input('name');

       //dd(Input::hasFile('book_image'));
    //    dd(Input::hasFile('book_image'),Input::file('book_image'));
        return redirect('book.books')->with('success', 'Book is Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
