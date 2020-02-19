@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="/patients">Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/patients/create">Add New Patient</a>
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
                <input type="search"  placeholder="Search for Patient" aria-describedby="button-addon5" class="form-control">
                <div class="input-group-append">
                  <button id="button-addon5" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <tr>
                <th scope="col">OPD/Id Number</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody class="text-center">
	      	@foreach ($patients as $patient)
		<tr>
                	<td>2015-8418</td>
               		<td>{{ $patient->last_name }}</td>
                	<td>{{ $patient->first_name }}</td>
                	<td>{{ $patient->middle_name }}</td>
                	<td>
                  		<a class="btn btn-info" href="/patients/show">View</a>
                  		<a class="btn btn-info" href="{{ route('patients.edit', $patient->id) }}">Edit</a>
                  		<a class="btn btn-secondary" href="#">Archive</a>
                	</td>
	      	</tr>
		@endforeach
            </tbody>
        
          </table>
    </div>
  </div>
@stop
