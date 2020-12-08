<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Payment;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect("login");
    }
    public function dash()
    {
        $currentUser = Auth::user()->id;
        $payments    =Payment::where('author_id',$currentUser)->get();
        $books      =Book::where('author_id',$currentUser)->get();
        return view("dashboard", compact('payments','books'));
    }
}
