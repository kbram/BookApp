<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Payment;

use Illuminate\Http\Request;
use Validator;
use File;
use Image;
use Auth;
use View;
use Storage;

class PaymentManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments   =Payment::all();
        $books      =Book::all();
        return view('payment.payments', compact('payments','books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books   =Book::all();
        return view('payment.addpayment', compact('books'));
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
                'payment_date'             => 'required|max:255',
                'amount'             => 'required',
                'book_id'                  =>'required',
                'payment_percentage' =>'required|max:100|min:0',
                'count'             =>'required|min:1',
            ],
            [
                'payment_date.required'                    => 'Payment Date is required',
                'amount.required'                    => 'Book Amount is required',
                'book_id.required'                    => 'Book Name is required',
                'payment_percentage.required'                    => 'Payment Percentage is required',
                'payment_percentage.max'                    => 'Payment Percentage maximum is 100%',
                'payment_percentage.min'                    => 'Payment Percentage maximum is 0%',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $amount=$request->input('amount');
        $percentage=(int)$request->input('payment_percentage');
        $count=(int)$request->input('count');
        $cost=$amount*$percentage/100;
       
        $payment = Payment::create([
            'payment_date'                       => $request->input('payment_date'),
            'amount'                             => $amount,
            'payment_cost'                       => $cost,
            'author_id'                          => $currentUser,
            'book_id'                            => $request->input('book_id'),
            'percentage'                         =>$percentage,
            ]);
           
        for ($x = 0; $x < $count; $x++) {
            
            $payment->save();
        }

       
       

        return redirect('payment.payments')->with('success', 'Book is Added');
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
        $payment   =Payment::find($id);
        $books      =Book::all();
        return view('payment.editpayment', compact('payment','books'));
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
                'payment_date'             => 'required|max:255',
                'amount'             => 'required',
                'book_id'                  =>'required',
                'payment_percentage' =>'required|max:100|min:0',
            ],
            [
                'payment_date.required'                    => 'Payment Date is required',
                'amount.required'                    => 'Book Amount is required',
                'book_id.required'                    => 'Book Name is required',
                'payment_percentage.required'                    => 'Payment Percentage is required',
                'payment_percentage.max'                    => 'Payment Percentage maximum is 100%',
                'payment_percentage.min'                    => 'Payment Percentage maximum is 0%',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $amount=$request->input('amount');
        $percentage=(int)$request->input('payment_percentage');
        $cost=$amount*$percentage/100;

        $payment = Payment::find($id);
        
        $payment->payment_date               =$request->input('payment_date');
        $payment->amount                     = $amount;
        $payment->payment_cost                        = $cost;
        $payment->author_id                          = $currentUser;
        $payment->book_id                           = $request->input('book_id');
        $payment->percentage                         =$percentage;
        
        $payment->save();

        return redirect('/payment')->with('success', 'Book is Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
    public function deleteRequest(Request $request){
        
        $payment = Payment::find($request->id);
        if ($payment->id) {
            $payment->delete();
        }
        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );
        return response()->json($response); 
    }
}
