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
              <a class="nav-link" href="{{ route('users.index') }}">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('users.create') }}">Add New User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Archive</a>
              </li>
          </ul>
        </div>
        
        <div class="card-body">
            <img src="/img/Picture1.png" alt="create_avatar" class="create_avatar"><br>
            <input id="inp" type="file" accept="image/*">
        
        <div class="container register"  style="margin-left: 0%;"><br>

            <div class="row justify-content-center align-items-center">
        <div class="row">
            <div class="tab-content input-center" id="myTabContent" >
                <br>
                    <div class="row register-form" >
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="ID Number *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Middle Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Home Address *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Present Address *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Civil Status</option>
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Widowed</option>
                                    <option>Separated</option>
                                    <option>In certain cases</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span> 
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input 
                                name="email" 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                placeholder="Email Address *" 
                                value="{{ old('email') }}" />
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Phone Number *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Age *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Birth Date *" value="" />
                            </div>
                            <div class="form-group">
                                <input 
                                name="license_number" 
                                type="number" 
                                class="form-control @error('license_number') is-invalid @enderror" 
                                placeholder="License Number *" 
                                value="{{ old('license_number') }}" />
    
                                @error('license_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Role</option>
                                    <option>Student</option>
                                    <option>Faculty</option>
                                    <option>Staff</option>
                                    <option>OPD/Dependent</option>
                                </select>
                            </div>
                            <br><button style="postion: center" type ="button" class = "btn btn-info">Register</button>
                            <button style="postion: center" type ="button" class = "btn btn-secondary">Cancel</button>
                    </div>
                </div>

                

       
            </form>
            </div>
            </div>
    </div>
</div>
@stop