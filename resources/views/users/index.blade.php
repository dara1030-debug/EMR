@extends('layouts.app')

@section('content')
<div class="container" style="margin-left:10%">    
<h1>Users</h1>
<table class="table table-bordereds">
    <thead class="thead-light">
      <tr>
        <th scope="col">Role</th>
        <th scope="col">Username</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email Address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Admin</th>
        <td>Admin</td>
        <td>Admin</td>
        <td>admin@admin.com</td>
      </tr>
      <tr>
        <th scope="row">Physician</th>
        <td>Jacob</td>
        <td>Jacob Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">Nurse</th>
        <td>Larry</td>
        <td>Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>
@stop