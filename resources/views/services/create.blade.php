@extends('layouts.app')

@section('content')
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
        <form class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Name of Service</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="service name" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-8 mb-3">
                <label for="validationCustom02">Description</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="description" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3 ml-5 mx-auto" style="width: 200px;>
                <label for="validationCustom03">Added By</label>
                <select class="custom-select" required>
                    <option value="">Added by</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                <div class="invalid-feedback">
                  Please provide name.
                </div>
              </div>
            </div>
            
            <a href="#" button class="btn btn-primary" type="submit">Submit form</button></a>
          </form>
    </div>
  </div>
@endsection


