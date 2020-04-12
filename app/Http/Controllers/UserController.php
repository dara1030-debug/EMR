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
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'civil_status' => 'required',
            'age' => 'required',
            'birthdate' => 'required', 
            'present_address' => 'required',
            'gender' => 'required',
            'role_id' => 'required',
            'contact_number' => 'required',
            'license_number' => 'required',
        ]);

        $user = User::create([
            'role_id' => $request->role_id,
            'email' => $request->email,
            'password' => $request->password,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'civil_status' => $request->civil_status,
            'age' => $request->age,
            'birthdate' => $request->birthdate,
            'present_address' => $request->present_address,
            'home_address' => $request->home_address,
            'contact_number' => $request->contact_number,
            'license_number' => $request->license_number,
            'last_activity' => $request->last_activity,
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

    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
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
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'civil_status' => 'required',
            'age' => 'required',
            'birthdate' => 'required', 
            'present_address' => 'required',
            'role_id' => 'required',
            'contact_number' => 'required',
            'license_number' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->civil_status = $request->civil_status;
        $user->age = $request->age;
        $user->birthdate = $request->birthdate;
        $user->present_address = $request->present_address;
        $user->home_address = $request->home_address;
        $user->contact_number = $request->contact_number;
        $user->license_number = $request->license_number;
        $user->last_activity = $request->last_activity;
        
        if ($request->get('gender') != null) {
            $user->gender = $request->gender;
        }

        
        if ($request->get('password') != null) {
            $user->password = $request->password;
        }

        if ($request->get('gender') != null) {
            $user->gender = $request->gender;
        }

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

    public function deleteUser($id)
    {
        $user = User::withTrashed()->where('id', $id)->first();

        if(!isset($user)) {
            return redirect()->back()->with('error', 'The system was unable to delete the user permanently.');
        }

        $user->forceDelete();
        
        return redirect()->back()->with('success', 'A user has been deleted permanently.');
    }

    public function restoreUser($id)
    {
        $user = User::withTrashed()->where('id', $id)->first();

        if(!isset($user)) {
            return redirect()->back()->with('error', 'The system was unable to restore the user.');
        }

        $user->restore();
        
        return redirect()->back()->with('success', 'A user has been restored successfully!');
    }
}
