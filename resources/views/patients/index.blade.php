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
      </ul>
    </div>
    <div class="card-body">
        <table class="table table-bordereds">
            <thead class="text-center thead-light">
              <tr>
                <th scope="col">Id Number</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">College / Department</th>
              </tr>
            </thead>
        
          </table>
    </div>
  </div>
@stop