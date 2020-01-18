@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="card text-center mb-5">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.index') }}">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('users.create') }}">Add New User</a>
            </li>
          </ul>
        </div>
        
        <div class="card-body">
            <h3 class="register-heading">LABORATORY REPORT</h3>
            <h4> HEMATOLOGY SECTION <h4>
            <form action="{{ route('users.store') }}" method="post">
                @csrf
               
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop