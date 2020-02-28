@extends('layouts.app')

@section('content')
    {{--Store Services--}}
    {{--can also retrieve /restore--}}
    <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link" href="/services">Clinic Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('services.create') }}">Add New Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Archive</a>{{-- sir erik sudgested na walang delete. those student nga nag left sa school kay mabutang diri ilang medical records para maretrieve nila if kailanganin--}}
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
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-info" href="#">View</a>
                              <a class="btn btn-info" href="#">Restore</a>
                    </td>
                </tr>
                
                </tbody>
            
              </table>
        </div>
      </div>
@endsection


