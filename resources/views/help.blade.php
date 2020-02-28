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
        <a class="nav-link active" href="/users">Help</a>
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
              <th scope="col">Help</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody class="text-left">
              <tr>
                  <td>1. How to Retrieve Patient Medical Record</td>
                  <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
              </tr>
              <tr>
                <td>2. How to Retrieve Patient Medical Record</td>
                <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
            </tr>
            <tr>
                <td>3. How to Retrieve Patient Medical Record</td>
                <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
            </tr>
            <tr>
                <td>4. How to Retrieve Patient Medical Record</td>
                <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
            </tr>
            <tr>
                <td>5. How to Retrieve Patient Medical Record</td>
                <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
            </tr>
            <tr>
                <td>6. How to Retrieve Patient Medical Record</td>
                <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
            </tr>
            <tr>
                <td>7. How to Retrieve Patient Medical Record</td>
                <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
            </tr>
            <tr>
                <td>8. How to Retrieve Patient Medical Record</td>
                <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
            </tr>
            <tr>
                <td>9. How to Retrieve Patient Medical Record</td>
                <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
            </tr>
            <tr>
                <td>10. How to Retrieve Patient Medical Record</td>
                <td>Go to Manage Patient Module, Click Archieve, input the name of the Patient on the searchbar, then click restore button</td>
            </tr>

          </tbody>
      
        </table>
  </div>
</div>
@stop