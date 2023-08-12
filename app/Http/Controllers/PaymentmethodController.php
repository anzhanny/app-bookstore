<?php

namespace App\Http\Controllers;
use App\Models\Paymentmethod;
use Illuminate\Http\Request;

class PaymentmethodController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentmethods = Paymentmethod::paginate(10);
        return view ('paymentmethod.index', compact('paymentmenthods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paymentmethod.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('title');
        $account_number = $request->input('created_id');
        $type = $request->input('amount');
        $data = new Paymentmethod();
        $data->name = $name;
        $data->account_number =  $account_number;
        $data->type =  $type;
        $data->save();

        return redirect('/paymentmethod');      
    }

    public function boot()
    {
        Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));}

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
        $paymentMethods = Paymentmethod::find($id);
        return view ('paymentmethod.edit', compact('paymentmethods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $name = $request->input('title');
        $account_number = $request->input('created_id');
        $type = $request->input('amount');
        $data = Paymentmethod::find($id);
        $data->name = $name;
        $data->account_number =  $account_number;
        $data->type =  $type;
        $data->save();

        return redirect('/paymentmethod');      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $paymentMethods = Paymentmethod::find($id);
        $paymentMethods->delete();
        // return response()->json($faculties);
        return redirect('/paymentmethod');    
    }
}

