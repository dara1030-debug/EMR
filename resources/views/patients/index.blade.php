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
        <table class="table table-bordered table-responsive-md">
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
                	<td>2015-8418</td>
               		<td>{{ $patient->last_name }}</td>
                	<td>{{ $patient->first_name }}</td>
                	<td>{{ $patient->middle_name }}</td>
                	<td>
                  		<a href="{{ route('patients.show', $patient->id) }}"><i class="fa fa-eye" style="padding-right:20px"aria-hidden="true"></a></i>
                  		<a href="{{ route('patients.edit', $patient->id) }}"><i class="fa fa-edit" style="padding-right:20px" aria-hidden="true"></a></i>
                  		<a href="#"><i class="fa fa-archive" style="padding-right:10px" aria-hidden="true"></a></i>
                  	
                	</td>
	      	      </tr>
            @endforeach
            </tbody>
          </table>
          <nav aria-label="Paging">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="previous">
                  <span aria-hiddden="true">&laquo; </span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="previous">
                  <span aria-hiddden="true">&raquo; </span>
                  <span class="sr-only">Next </span>
                </a>
              </li>
            </ul> 
          </nav>
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
