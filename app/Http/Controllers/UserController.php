<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('role')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archive()
    {
        $users = User::with('role')
            ->withTrashed()
            ->where('deleted_at', '!=', null)
            ->get();

        return view('users.archive', compact('users'));
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
        $imagePath = null;
        
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $request->validate([
                'avatar' => 'image|max:2048|mimes: jpg,jpeg,png',
            ]);

            /** Variables. */
            $avatar = $request->file('avatar');
            $host = $request->getSchemeAndHttpHost();

            /** Uploading the image. */
            $storage = Storage::disk('public');
            $filePath = $storage->putFile('avatars', new File($avatar), 'public');
            $imagePath = $host.'/storage/'.$filePath;
        }
        
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
            'phone_number' => 'required',
            'license_number' => 'required',
        ]);

        $user = User::create([
            'role_id' => $request->role_id,
            'avatar' => $imagePath,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'civil_status' => $request->civil_status,
            'age' => $request->age,
            'birthdate' => $request->birthdate,
            'present_address' => $request->present_address,
            'home_address' => $request->home_address,
            'phone_number' => $request->phone_number,
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
     * Searches for a patient from DB.
     * 
     * @return Collection
     */
    public function search()
    {
        $data = request()->validate([
            'search' => 'required',
        ]);
        
        $users = User::where('first_name', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('first_name', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('middle_name', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('last_name', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('gender', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('phone_number', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('civil_status', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('home_address', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('present_address', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('age', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('birthdate', 'LIKE', '%' . $data['search'] . '%')
            ->paginate(20);

        return view('users.search', [
            'users' => $users 
        ]);
    }

    /**
     * Searches for a patient from DB.
     * 
     * @return Collection
     */
    public function archive_search()
    {
        $data = request()->validate([
            'search' => 'required',
        ]);
        
        $users = User::onlyTrashed()
            ->where('first_name', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('first_name', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('middle_name', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('last_name', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('gender', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('phone_number', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('civil_status', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('home_address', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('present_address', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('age', 'LIKE', '%' . $data['search'] . '%')
            ->orWhere('birthdate', 'LIKE', '%' . $data['search'] . '%')
            ->paginate(20);

        return view('users.archive_search', [
            'users' => $users 
        ]);
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
        $imagePath = null;
        
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $request->validate([
                'avatar' => 'image|max:2048|mimes: jpg,jpeg,png',
            ]);

            /** Variables. */
            $avatar = $request->file('avatar');
            $host = $request->getSchemeAndHttpHost();

            /** Uploading the image. */
            $storage = Storage::disk('public');
            $filePath = $storage->putFile('avatars', new File($avatar), 'public');
            $imagePath = $host.'/storage/'.$filePath;
        }
        
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'gender' => 'required',
            'civil_status' => 'required',
            'age' => 'required',
            'birthdate' => 'required', 
            'present_address' => 'required',
            'role_id' => 'required',
            'phone_number' => 'required',
            'license_number' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->avatar = $imagePath;
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
        $user->phone_number = $request->phone_number;
        $user->license_number = $request->license_number;
        $user->last_activity = $request->last_activity;
        
        if ($request->get('gender') != null) {
            $user->gender = $request->gender;
        }

        
        if ($request->get('password') != null) {
            $user->password = bcrypt($request->password);
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
