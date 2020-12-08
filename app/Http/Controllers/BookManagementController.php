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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $currentUser = Auth::user()->id;
        $books      =Book::where('author_id',$currentUser)->get();   
        return view('book.books', compact('books'));
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
                'book_image'            => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        // $request->image->storeAs('images', $imageName);

        $book = Book::create([
            'book_name'                      => $request->input('book_name'),
            'author_id'                      => $currentUser,
            'cost'                           => $request->input('book_cost'),
            'file_path'                      => $imageName,
            'published_date'                 => $request->input('book_date'),
            ]);


       $book->save();    
        return redirect('/books')->with('success', 'Book detail is Added !!!');
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
        $book      =Book::find($id);
        return view('book.editbook', compact('book'));
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
      
        $currentUser = Auth::user()->id;
        $validator = Validator::make(
            $request->all(),
            [
                'book_name'             => 'required|max:255',
                'book_date'             => 'required',
                'book_cost'             => 'required',
                'book_image'            => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        if($request->book_image){
            $imageName = time().'.'.$request->book_image->extension();
            unlink(public_path("images/{$request->picture}"));
            $request->book_image->move(public_path('images'), $imageName);
        }else{
            $imageName=$request->picture;
        }
        
        $book = Book::find($id);
        $book->book_name                      = $request->input('book_name');
        $book->author_id                    = $currentUser;
        $book->cost                         = $request->input('book_cost');
        $book->file_path                     = $imageName;
        $book->published_date                 = $request->input('book_date');
        

        $book->save();
        return redirect('/books')->with('success', 'Book detail is Updated !!!');
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
    public function deleteRequest(Request $request){
        
        $book = Book::find($request->id);
        if ($book->id) {
            $book->payment()->delete();
            $book->delete();
        }
        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );
        return response()->json($response); 
    }
}
