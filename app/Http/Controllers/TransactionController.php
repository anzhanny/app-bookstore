<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::paginate(10);
        return view ('transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buyer_id = $request->input('buyer_id');
        $book_id = $request->input('book_id');
        $payment_method_id = $request->input('payment_method_id');
        $qty = $request->input('qty');
        $price = $request->input('price');
        $ppn = $request->input('ppn');
        $discount = $request->input('discount');
        $total_payment = $request->input('total_payment');
        $status = $request->input('status');
        $data = new Transaction();
        $data->buyer_id = $buyer_id;
        $data->book_id =  $book_id;
        $data->payment_method_id =  $payment_method_id;
        $data->qty = $qty;
        $data->price = $price;
        $data->ppn =  $ppn;
        $data->discount =  $discount;
        $data->total_payment = $total_payment;
        $data->status = $status;
        $data->save();

        return redirect('/transaction');      
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
    public function edit( $id)
    {
        $transactions = Transaction::find($id);
        return view ('transaction.edit', compact('transactions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $buyer_id = $request->input('buyer_id');
        $book_id = $request->input('book_id');
        $payment_method_id = $request->input('payment_method_id');
        $qty = $request->input('qty');
        $price = $request->input('price');
        $ppn = $request->input('ppn');
        $discount = $request->input('discount');
        $total_payment = $request->input('total_payment');
        $status = $request->input('status');
        $data = Transaction::find($id);
        $data->buyer_id = $buyer_id;
        $data->book_id =  $book_id;
        $data->payment_method_id =  $payment_method_id;
        $data->qty = $qty;
        $data->price = $price;
        $data->ppn =  $ppn;
        $data->discount =  $discount;
        $data->total_payment = $total_payment;
        $data->status = $status;
        $data->save();

        return redirect('/transaction');     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $transactions = Transaction::find($id);
        $transactions->delete();
        // return response()->json($faculties);
        return redirect('/transaction');    
    }
}
