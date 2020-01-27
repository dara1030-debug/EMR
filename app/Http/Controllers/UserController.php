<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
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
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'civil_status' => 'required|string',
            'age' => 'required',
            'birthdate' => 'required', 
            'present_address' => 'required',
            'gender' => 'required|string',
            'role' => 'required|integer',
            'contact_number' => 'required',
            'license_number' => 'required',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'civil_status' => $request->civil_status,
            'age' => $request->age,
            'birthdate' => $request->birthdate, 
            'present_address' => $request->present_address,
            'gender' => $request->gender,
            'role_id' => $request->role,
            'contact_number' => $request->contact_number,
            'license_number' => $request->license_number,
        ]);

        return redirect()->back()->with('success', 'A user has been successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
   * public function show($id)
    *{
     *   $user = User::findOrFail($id);

      *  return view('users.show', compact('user'));
    *}*/

    public function show()
    {
        return view('users.show');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
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
        // dd($request->all());
        
        $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'password' => 'confirmed',
            'civil_status' => 'required|string',
            'age' => 'required',
            'birthdate' => 'required', 
            'present_address' => 'required',
            'role' => 'required|integer',
            'contact_number' => 'required',
            'license_number' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = $request->password;
        }
        $user->civil_status = $request->civil_status;
        $user->age = $request->age;
        $user->birthdate = $request->birthdate;
        $user->present_address = $request->present_address;
        if ($request->gender) {
            $user->gender = $request->gender;
        }
        $user->role_id = $request->role;
        $user->contact_number = $request->contact_number;
        $user->license_number = $request->license_number;
        $user->save();

        return redirect()->back()->with('success', 'A user has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrfail($id);

        if($user->delete()) {
            return redirect()->back()->with('success', 'A user has been deleted successfully!');
        }
    }
}
