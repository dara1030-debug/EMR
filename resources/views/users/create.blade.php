@extends('layouts.app')

@section('content')
    <div class="card text-center mb-5">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link" href="/users">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/users/create">Add New User</a>
            </li>
          </ul>
        </div>
        
        <div class="card-body">
            <h3 class="register-heading">Add User</h3>
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="row register-form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input 
                            name="first_name" 
                            type="text" 
                            class="form-control @error('first_name') is-invalid @enderror" 
                            placeholder="First Name *" 
                            value="{{ old('first_name') }}" 
                            />

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
                            value="{{ old('middle_name') }}" />

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
                        <button type="submit" class="btn btn-info">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop