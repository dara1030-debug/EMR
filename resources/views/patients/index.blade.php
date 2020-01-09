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
              
              <tr>
                <td>2015-8418</td>
                <td>Albiso</td>
                <td>Anne Hayathi</td>
                <td>Sesaldo</td>
                <td>
                  <a class="btn btn-primary" href="#">View</a>
                  <a class="btn btn-primary" href="#">Edit</a>
                  <a class="btn btn-primary" href="#">Delete</a>
                </td>
              </tr>
            </tbody>
        
          </table>
    </div>
  </div>
@stop