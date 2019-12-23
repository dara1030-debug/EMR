@extends('layouts.app')
<div style='background-color: #B2d9EA'>
@section('content')


<div class="container register"  style="margin-left: 40%">
                <div class="row">
                        <div class="tab-content" id="myTabContent" >
                                <h3 class="register-heading">Add User</h3>
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
                                        <button type ="button" class = "btn btn-info">Register</button>
                                    </div>
                                </div>
                            </div>
                        
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="number" name="contact_number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="number" name="license_number" class="form-control" placeholder="License Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" class="form-control" placeholder="Address *" value="" />
                        </div>
                        <div class="form-group">
                            <select name="role_id" class="form-control">
                                <option value="null" class="hidden" selected disabled>Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Doctor</option>
                                <option value="3">Nurse</option>
                            </select>
                        </div>
                        
                        <input type="submit" class="btnRegister"  value="Register"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop