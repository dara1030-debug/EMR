@extends('layouts.app')

@section('content')
  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
  @endif

<div class="card text-center border-info">
  <div class="card-header border-info">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/users">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/create">Add New User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.archive') }}">Archive</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="input-group mb-4" style="margin:auto;max-width:250px">
      <form action="{{ route('users.search') }}" method="POST">
        @csrf
          <div class="row">
              <div class="input-group-prepend">
                <input type="search" autocomplete="off" name="search" placeholder="Search for User" class="form-control">
                <button type="submit" class="form-control col-sm-2"><i class="fa fa-search"></i></button>
              
              </div>
          </div>
      </form>  
    </div>
      <table class="table table-responsive-md table-hover">
          
          <thead class="text-center thead-light">
            <tr>
              <th scope="col">Role</th>
              <th scope="col">Username</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="text-center " id="myTable">
                @foreach($users as $user)
                  @if(!$user->deleted_at)
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
                          <a  href="{{ route('users.show', $user->id) }}"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="view" style="padding-right:20px"aria-hidden="true"></a></i>
                          <a href="{{ route('users.edit', $user->id) }}"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="edit" style="padding-right:20px"aria-hidden="true"></a></i>
                          <button class="btn" type="submit">
                            <i class="fa fa-archive" data-toggle="tooltip" data-placement="top" title="archive" style="padding-right:15px"aria-hidden="true"></i> 
                          </button>{{--archive nalang daw instead of deleting the files of user--}}
                        </form>
                      </td>
                    </tr>
                  @endif
                @endforeach
          </tbody>
      
        </table>
  </div>
</div>
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
@stop

@push('js')

<script>
  const confirmDelete = () => {
    if (confirm('Are you sure you want to archive this user?')) {
      return true
    } else {
      return false
    }
  }
</script>

<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
  </script>
@endpush