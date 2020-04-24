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
          <a class="nav-link" href="patients/store">Archive</a>{{-- sir erik sudgested na walang delete. those student nga nag left sa school kay mabutang diri ilang medical records para maretrieve nila if kailanganin--}}
        </li>
      </ul>
      
</div>
    <div class="card-body">
      <div class="input-group mb-4" style="margin:auto;max-width:300px">
        <input type="search" id="myInput" placeholder="Search for Patient " aria-describedby="button-addon5" class="form-control">
      {{--<i class="fa fa-search"></i>--}}
        
      </div>
        <table class="table table-bordered table-responsive-md table-hover">
            <thead class="text-center thead-light">
              
              <tr>
                <th scope="col">OPD/Id Number</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody class="p2 text-center" id="myTable">
	          	@foreach ($patients as $patient)
	          	<tr>
                	<td>{{ $patient->id_number }}</td>
               		<td>{{ $patient->last_name }}</td>
                	<td>{{ $patient->first_name }}</td>
                	<td>{{ $patient->middle_name }}</td>
                	<td>
                  		<a href="{{ route('patients.show', $patient->id) }}"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="view" style="padding-right:20px"aria-hidden="true"></a></i>
                  		<a href="{{ route('patients.edit', $patient->id) }}"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="edit" style="padding-right:20px" aria-hidden="true"></a></i>
                  		<a href="#"><i class="fa fa-archive" style="padding-right:10px" data-toggle="tooltip" data-placement="top" title="archive" aria-hidden="true"></a></i>
                  	
                	</td>
	      	      </tr>
            @endforeach
            </tbody>
          </table><br>
          <div class="pagination justify-content-center">
            {{$patients->links()}}
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

<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
  </script>
@stop