<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = users::paginate(10);
        return view ('users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $birthday = $request->input('birthday');
        $is_active = $request->input('is_active');
        $role = $request->input('role');
        $data = new Users();
        $data->name = $name;
        $data->email =  $email;
        $data->password =  $password;
        $data->phone = $phone;
        $data->address = $address;
        $data->birthday =  $birthday;
        $data->is_active =  $is_active;
        $data->role = $role;
        $data->save();

        return redirect('/users');    
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
        $user = Users::find($id);
        return view ('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $birthday = $request->input('birthday');
        $is_active = $request->input('is_active');
        $role = $request->input('role');
        $data = Users::find($id);
        $data->name = $name;
        $data->email =  $email;
        $data->password =  $password;
        $data->phone = $phone;
        $data->address = $address;
        $data->birthday =  $birthday;
        $data->is_active =  $is_active;
        $data->role = $role;
        $data->save();

        return redirect('/users');}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $user = Users::find($id);
        $user->delete();
        // return response()->json($faculties);
        return redirect('/users');        }
}
