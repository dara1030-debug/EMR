@extends('layouts.app')

@push('css')
<style>
.px-10 {
    padding-left: 15rem;
    padding-right: 15rem;
}
</style>
@endpush

{{-- <div style='background-color: #B2d9EA'> --}}
@section('content')
<div class="container px-10">
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
    
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="tab-content" id="myTabContent" >
            <h3 class="register-heading">Edit User</h3>
            <div class="row register-form">
                <div class="col-md-6">
                    <div class="form-group">
                        <input 
                        name="first_name"
                        type="text" 
                        class="form-control @error('first_name') is-invalid @enderror" 
                        placeholder="First Name *" 
                        value="{{ $user->first_name ? $user->first_name : old('first_name') }}" />

                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input 
                        name="middle_name"
                        type="password" 
                        class="form-control @error('middle_name') is-invalid @enderror" 
                        placeholder="Middle Name *" 
                        value="{{ $user->middle_name ? $user->middle_name : old('middle_name') }}" />

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
                        value="{{ $user->middle_name ? $user->middle_name : old('last_name') }}" />

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
                        placeholder="New Password *" /> 

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
                        placeholder="Confirm New Password *" 
                        value="" />

                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select 
                        name="civil_status"
                        value="{{ $user->civil_status ? $user->civil_status : old('civil_status') }}"
                        class="form-control @error('civil_status') is-invalid @enderror">
                            <option class="hidden" @if(!$user->civil_status) selected @endif disabled>Civil Status</option>
                            <option value="Single" @if($user->civil_status == 'Single') selected @endif>Single</option>
                            <option value="Married" @if($user->civil_status == 'Married') selected @endif>Married</option>
                            <option value="Widowed" @if($user->civil_status == 'Widowed') selected @endif>Widowed</option>
                            <option value="Separated" @if($user->civil_status == 'Separated') selected @endif>Separated</option>
                            <option value="In certain cases" @if($user->civil_status == 'In certain cases') selected @endif>In certain cases</option>
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
                                <input 
                                type="radio" 
                                name="gender" 
                                value="male">
                                <span> Male </span> 
                            </label>
                            <label class="radio inline"> 
                                <input 
                                type="radio" 
                                name="gender" 
                                value="female">
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
                        value="{{ $user->email ? $user->email : old('email') }}" />

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
                        value="{{ $user->contact_number }}" />

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
                        value="{{ $user->age ? $user->age : old('age') }}" />

                        @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div style="display: none">
                            {{ $userBirthdate = date('Y-m-d', strtotime($user->birthdate)) }}
                        </div>
                        <input 
                        name="birthdate"
                        type="date" 
                        class="form-control @error('birthdate') is-invalid @enderror" 
                        placeholder="Birth Date *" 
                        value="{{ $userBirthdate ? $userBirthdate : old('birthdate') }}" />
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
                        value="{{ $user->present_address ? $user->present_address : old('present_address') }}" />

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
                        value="{{ $user->license_number ? $user->license_number : old('license_number') }}" />

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
                            <option class="hidden" @if(!$user->role) selected @endif disabled>Role</option>
                            <option value="1" @if($user->role == '1') selected @endif>Admin</option>
                            <option value="2" @if($user->role == '2') selected @endif>Doctor</option>
                            <option value="3" @if($user->role == '3') selected @endif>Nurse</option>
                        </select>

                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-primary btn-lg" value="Save"/>
                </div>
            </div>
        </div>
    </form>
</div>
@stop