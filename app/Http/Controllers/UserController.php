<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(10);
        return view('admin.users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required|unique:users|max:100|min:3',
            'email'     => 'required|email|unique:users',
            'role'      => 'required',
        ]);

        if($request->input('password')) {
            // jika di inputkan password
            $password = bcrypt($request->password);
        } else {
            //jika tidak di inputkan password
            $password = bcrypt('asdqwe123');
        }

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'role'      => $request->role,
            'password'  => $password
        ]);
        return redirect()->route('users.index')->with('toast_success', 'User create success');
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
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
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
        $this->validate($request,[
            'name'      => 'required|max:100|min:3',
            'role'      => 'required',
        ]);
        if($request->input('password')) {
            //jika merubah password
            $data = [
            'name'      => $request->name,
            'role'      => $request->role,
            'password'  => bcrypt($request->password)
            ];
        } else {
            //jika tidak merubah password
            $data = [
            'name'      => $request->name,
            'role'      => $request->role
            ];
        }
        $user = User::find($id);
        $user->update($data);
        return redirect()->route('users.index')->with('toast_success', 'User success updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('toast_success', 'User success deleted');
    }
}