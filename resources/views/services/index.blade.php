@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="/services">Clinic Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('services.create') }}">Add New Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Archive</a>{{-- sir erik sudgested na walang delete. those student nga nag left sa school kay mabutang diri ilang medical records para maretrieve nila if kailanganin--}}
        </li>
      </ul>
      
    </div>
    <div class="card-body">
        <table class="table table-bordereds table-responsive-md">
            <thead class="text-center thead-light">
              

              <div class="input-group mb-4" style="margin:auto;max-width:300px">
                <input type="search"  placeholder="Search for Services" aria-describedby="button-addon5" class="form-control">
                <div class="input-group-append">
                  <button id="button-addon5" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <tr>
                <th scope="col">Name of Service</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tr>
                <td>Checkup</td>
                <td>Checkcup only description</td>
                <td>
                    <a class="btn btn-info" href="/services/show">View</a>
                  		<a class="btn btn-info" href="services/edit">Edit</a>
                  		<a class="btn btn-secondary" href="#">Archive</a>
                </td>
            </tr>
            <tr>
                <td>Consultation</td>
                <td>Consultation only description</td>
                <td>
                    <a class="btn btn-info" href="/services/show">View</a>
                  		<a class="btn btn-info" href="#">Edit</a>
                  		<a class="btn btn-secondary" href="#">Archive</a>
                </td>

            </tr>
            <tr>
                <td>Urine Lab Test</td>
                <td>Checkcup only description</td>
                <td>
                    <a class="btn btn-info" href="/services/show">View</a>
                  		<a class="btn btn-info" href="#">Edit</a>
                  		<a class="btn btn-secondary" href="#">Archive</a>
                </td>

            </tr>
            <tr>
                <td>Blood Test</td>
                <td>Checkcup only description</td>
                <td>
                    <a class="btn btn-info" href="/services/show">View</a>
                  		<a class="btn btn-info" href="#">Edit</a>
                  		<a class="btn btn-secondary" href="#">Archive</a>
                </td>

            </tr>
            
            </tbody>
        
          </table>
    </div>
  </div>
@stop

{{--@extends('layouts.app')
@section('content')
    Index
    <br>
    <a href="{{ route('services.show', 1) }}">Go to Show page with ID 1</a>
    <br>
    <a href="{{ route('services.edit', 1) }}">Go to Edit page with ID 1</a>
    <br>
    <a href="{{ route('services.create') }}">Go to Create page</a>
@endsection
--}}

