@extends('layouts.app')

@section('content')
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/users">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/create">Add New User</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
      <table class="table table-bordereds">
        <div class="input-group mb-4" style="margin:auto;max-width:300px">
          <input type="search"  placeholder="Search for Users" aria-describedby="button-addon5" class="form-control">
          <div class="input-group-append">
            <button id="button-addon5" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div>
        </div>
          <thead class="text-center thead-light">
            <tr>
              <th scope="col">Role</th>
              <th scope="col">Username</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="text-center">
            @foreach($users as $user)
            <tr>
              <td>{{ $user->role->name }}</td>
              <td>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</td>
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
</div>

@stop