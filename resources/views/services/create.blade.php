@extends('layouts.app')

@section('content')
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>	
      <strong>{{ $message }}</strong>
  </div>
  @endif

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/services">Clinic Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('services.create') }}">Add New Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Archive</a>{{-- sir erik sudgested na walang delete. those student nga nag left sa school kay mabutang diri ilang medical records para maretrieve nila if kailanganin--}}
        </li>
      </ul>
      
    </div>
    <div class="card-body">
      <form class="needs-validation" method="POST" action="{{ route('services.store') }}" novalidate>
        @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Name of Service</label>
                <input name="name" type="text" class="form-control" id="validationCustom01" placeholder="service name" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-8 mb-3">
                <label for="validationCustom02">Description</label>
                <input name="description" type="text" class="form-control" id="validationCustom02" placeholder="description" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3 ml-5 mx-auto" style="width: 200px;>
                <label for="validationCustom03">Added By</label>
                <select name="added_by" class="custom-select" required>
                  @foreach(\App\User::get() as $user)
                    <option value="{{ $user->id }}">{{ $user->fullName() }}</option>
                  @endforeach
                  </select>
                <div class="invalid-feedback">
                  Please provide name.
                </div>
              </div>
            </div>
            
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
    </div>
  </div>
@endsection


