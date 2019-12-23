@extends('layouts.app')

@section('content')
<div class="container" style="margin-left:10%">    
<div class="float-left"><h1>Users</h1></div>
<div class="float-right"><a href="{{ route('users.create') }}" class="btn btn-success btn-lg">Add User</a></div>
  <table class="table table-bordereds">
    <thead class="text-center thead-light">
      <tr>
        <th scope="col">Role</th>
<<<<<<< HEAD
        <th scope="col">Username</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email Address</th>
=======
        <th scope="col">Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Actions</th>
>>>>>>> 341602d4a9fb1ff9ff1cb00e63b8280c493f73ea
      </tr>
    </thead>
    <tbody class="text-center">
      @foreach($users as $user)
      <tr>
        <td>{{ $user->role->name }}</td>
        <td>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <a class="btn btn-primary" href="#">View</a>
          <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
          <a class="btn btn-primary" href="#">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop