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
      <div class="input-group mb-4" style="margin:auto;max-width:300px">
        <input type="search"  id="myInput"  placeholder="Search for Services" aria-describedby="button-addon5" class="form-control">
      </div>
        <table class="table table-bordereds table-responsive-md table-hover">
            <thead class="text-center thead-light">
              <tr>
                <th scope="col">Name of Service</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="myTable">
            <tr>
                <td>Checkup</td>
                <td>Checkcup only description</td>
                <td>
                    <a href="/services/show"><i class="fa fa-eye" style="padding-right:20px"aria-hidden="true"></a></i>
                  		<a href="services/edit"><i class="fa fa-edit" style="padding-right:20px"aria-hidden="true"></a></i>
                  		<a href="#"><i class="fa fa-archive" style="padding-right:15px"aria-hidden="true"></a></i>
                </td>
            </tr>
            <tr>
                <td>Vaccine</td>
                <td>Anti Tetano</td>
                <td>
                  <a href="/services/show"><i class="fa fa-eye" style="padding-right:20px"aria-hidden="true"></a></i>
                  <a href="services/edit"><i class="fa fa-edit" style="padding-right:20px"aria-hidden="true"></a></i>
                  <a href="#"><i class="fa fa-archive" style="padding-right:15px"aria-hidden="true"></a></i>
                </td>

            </tr>
            <tr>
              <td>Dressing</td>
              <td>After Injury, </td>
              <td>
                <a href="/services/show"><i class="fa fa-eye" style="padding-right:20px"aria-hidden="true"></a></i>
                <a href="services/edit"><i class="fa fa-edit" style="padding-right:20px"aria-hidden="true"></a></i>
                <a href="#"><i class="fa fa-archive" style="padding-right:15px"aria-hidden="true"></a></i>
              </td>
          </tr>
          <tr>
            <td>Fist Aid</td>
            <td>fdadfjhgaffsfdhfdhsfhfsdhsdfhh</td>
            <td>
              <a href="/services/show"><i class="fa fa-eye" style="padding-right:20px"aria-hidden="true"></a></i>
              <a href="services/edit"><i class="fa fa-edit" style="padding-right:20px"aria-hidden="true"></a></i>
              <a href="#"><i class="fa fa-archive" style="padding-right:15px"aria-hidden="true"></a></i>
            </td>
        </tr>
            <tr>
                <td>Urinary Lab Test</td>
                <td>Checkcup only description</td>
                <td>
                  <a href="/services/show"><i class="fa fa-eye" style="padding-right:20px"aria-hidden="true"></a></i>
                  <a href="services/edit"><i class="fa fa-edit" style="padding-right:20px"aria-hidden="true"></a></i>
                  <a href="#"><i class="fa fa-archive" style="padding-right:15px"aria-hidden="true"></a></i>
                </td>

            </tr>
            <tr>
                <td>Blood Test</td>
                <td>Checkcup only description</td>
                <td>
                  <a href="/services/show"><i class="fa fa-eye" style="padding-right:20px"aria-hidden="true"></a></i>
                  <a href="services/edit"><i class="fa fa-edit" style="padding-right:20px"aria-hidden="true"></a></i>
                  <a href="#"><i class="fa fa-archive" style="padding-right:15px"aria-hidden="true"></a></i>
                </td>

            </tr>
            <tr>
              <td>Hematology Test</td>
              <td>Checkcup only description</td>
              <td>
                <a href="/services/show"><i class="fa fa-eye" style="padding-right:20px"aria-hidden="true"></a></i>
                <a href="services/edit"><i class="fa fa-edit" style="padding-right:20px"aria-hidden="true"></a></i>
                <a href="#"><i class="fa fa-archive" style="padding-right:15px"aria-hidden="true"></a></i>
              </td>
          </tr>
          <tr>
            <td>Follow Up Checkup</td>
            <td>Anti Tetano</td>
            <td>
              <a href="/services/show"><i class="fa fa-eye" style="padding-right:20px"aria-hidden="true"></a></i>
              <a href="services/edit"><i class="fa fa-edit" style="padding-right:20px"aria-hidden="true"></a></i>
              <a href="#"><i class="fa fa-archive" style="padding-right:15px"aria-hidden="true"></a></i>
            </td>
        </tr>
            </tbody>
        
          </table>
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

