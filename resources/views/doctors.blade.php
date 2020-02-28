@extends('layouts.app')

@section('content')
  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
  @endif

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/users">MSU-IIT Medical Clinic Staff</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
      <table class="table table-bordereds table-responsive-sm">
        <div class="input-group mb-4" style="margin:auto;max-width:300px">
          <input type="search"  placeholder="Search..." aria-describedby="button-addon5" class="form-control">
          <div class="input-group-append">
            <button id="button-addon5" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div>
        </div>
          <thead class="text-center thead-light">
            <tr>
              <th scope="col">Clinic Staff</th>
              <th scope="col">Positon</th>
            </tr>
          </thead>
          <tbody >
              <tr>
                  <td class="text-left">Doctor </td>
                  <td class="text-center">Head</td>
              </tr>
              <tr>
                <td class="text-left">Mr, Alejandro Anderson PHD</td>
                <td class="text-center">Head</td>
            </tr>
         

          </tbody>
      
        </table>
  </div>
</div>
@stop