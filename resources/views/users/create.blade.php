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
        
        <div class="container register"  style="margin-left: 12%">
        <div class="row">
            <div class="tab-content" id="myTabContent" >
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

                

       
                    <div class="col-md-6">
                        <div class="form-group">
                            <input 
                            name="first_name" 
                            type="text" 
                            class="form-control @error('first_name') is-invalid @enderror" 
                            placeholder="First Name *" 
                            value="{{ old('first_name') }}">

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input 
                            name="middle_name" 
                            type="text" 
                            class="form-control @error('middle_name') is-invalid @enderror" 
                            placeholder="Middle Name *" 
                            value="{{ old('middle_name') }}" >

                            @error('middle_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input 
                            name="last_name" 
                            type="text" 
                            class="form-control @error('last_name') is-invalid @enderror" 
                            placeholder="Last Name *" 
                            value="{{ old('last_name') }}" />

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input 
                            name="password" 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror"  
                            placeholder="Password *" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input 
                            name="password_confirmation" 
                            type="password" 
                            class="form-control @error('password_confirmation') is-invalid @enderror"  
                            placeholder="Confirm Password *" />

                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select 
                            name="civil_status" 
                            class="form-control @error('civil_status') is-invalid @enderror">
                                <option selected disabled>Civil Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                                <option value="In certain cases">In certain cases</option>
                            </select>

                            @error('civil_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="maxl">
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="male" checked>
                                    <span>Male</span> 
                                </label>
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="female">
                                    <span>Female </span> 
                                </label>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6">
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
                            <input 
                            name="contact_number" 
                            type="number" 
                            minlength="10" 
                            maxlength="10" 
                            class="form-control @error('contact_number') is-invalid @enderror" 
                            placeholder="Phone Number *" 
                            value="{{ old('contact_number') }}" />

                            @error('contact_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input 
                            name="age" 
                            type="number" 
                            class="form-control @error('age') is-invalid @enderror" 
                            placeholder="Age *" 
                            value="{{ old('age') }}" />

                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input 
                            name="birthdate" 
                            type="date" 
                            class="form-control @error('birthdate') is-invalid @enderror" 
                            placeholder="Birth Date *" 
                            value="{{ old('birthdate') }}" />

                            @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input 
                            name="present_address" 
                            type="text" 
                            class="form-control @error('present_address') is-invalid @enderror" 
                            placeholder="Present Address *" 
                            value="{{ old('present_address') }}" />

                            @error('present_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                            <select 
                            name="role" 
                            class="form-control @error('role') is-invalid @enderror">
                                <option class="hidden"  selected disabled>Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Doctor</option>
                                <option value="3">Nurse</option>
                            </select>

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop