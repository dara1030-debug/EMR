@extends('layouts.app')

@section('content')
  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
  @endif

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/users">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/create">Add New User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Archive</a>
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
              <td>
                <div class="badge 
                @if($user->role->name == 'Administrator') 
                  badge-danger 
                @elseif($user->role->name == 'Doctor')  
                  badge-success
                @elseif($user->role->name == 'Nurse')
                  badge-primary
                @endif">
                  {{ $user->role->name }}
                </div>
              </td>
              <td>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</td>
              <td>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <form action="{{ route('users.destroy', $user->id) }}" id="deleteForm" onsubmit="return confirmDelete()" method="post">
                  @csrf
                  @method('DELETE')
                  <a class="btn btn-primary" href="/users/show">View</a>
                  <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                  <button class="btn btn-secondary" type="submit">Archive</button> {{--archive nalang daw instead of deleting the files of user--}}
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
      
        </table>
  </div>
</div>
@stop

@push('js')
<script>
  const confirmDelete = () => {
    if (confirm('Are you sure you want to delete this user?')) {
      return true
    } else {
      return false
    }
  }
</script>
@endpush