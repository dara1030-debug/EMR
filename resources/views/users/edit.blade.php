@extends('layouts.app')

@section('content')
<<<<<<< Updated upstream
<div class="container register"  style="margin-left: 25%">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="row">
        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="tab-content" id="myTabContent" >
                <h3 class="register-heading">Edit User</h3>
                <div class="row register-form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name *" value="{{ $user->first_name }}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="middle_name" class="form-control" placeholder="Middle Name *" value="{{ $user->middle_name }}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name *" value="{{ $user->last_name }}" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control"  placeholder="New Password *" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirm New Password *" value="" />
                        </div>
                        <div class="form-group">
                            <div class="maxl">
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="Male">
                                    <span> Male </span> 
                                </label>
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="Female">
                                    <span>Female </span> 
                                </label>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="{{ $user->email }}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact_number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="{{ $user->contact_number }}" />
                        </div>
                        <div class="form-group">
                            <input type="number" name="license_number" class="form-control" placeholder="License Number *" value="{{ $user->license_number }}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" class="form-control" placeholder="Address *" value="{{ $user->address }}" />
                        </div>
                        <div class="form-group">
                            <select name="role_id" class="form-control">
                                <option value="null" class="hidden" selected disabled>Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Doctor</option>
                                <option value="3">Nurse</option>
                            </select>
                        </div>
                        
                        <input type="submit" class="btnRegister"  value="Save"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
=======
<div class="container" style="margin-left:10%"> 


>>>>>>> Stashed changes
@stop