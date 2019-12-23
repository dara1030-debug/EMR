@extends('layouts.app')
<div style='background-color: #B2d9EA'>
@section('content')
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
                                            <input type="number" class="form-control" placeholder="ID Number *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Middle Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Address *" value="" />
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
                                            <input type="text" class="form-control" placeholder="Present Address *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="License Number *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Role</option>
                                                <option>Admin</option>
                                                <option>Nurse</option>
                                                <option>Doctor</option>
                                            </select>
                                            </div>
                        <input type="submit" class="btnRegister"  value="Save"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop