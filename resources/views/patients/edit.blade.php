@extends('layouts.app')

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
        <form action="{{ route('patients.update', $patient->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="tab-content" id="myTabContent" >
                <h3 class="register-heading">Edit Patients</h3>
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
                                            <input type="text" class="form-control"  placeholder="Middle Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Home Address *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Present Address *" value="" />
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
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>College/Department</option>
                                                <option>OPD/DEPENDENT</option>
                                                <option>SCHOOL OF GRADUATE STUDIES</option>
                                                <option>COLLEGE OF EDUCATION</option>
                                                <option>COLLEGE OF NURSING</option>
                                                <option>CSM GRADUATE PROGRAMS</option>
                                                <option>COLLEGE OF BUSINESS ADMINISTRATION AND ACCOUNTANCY</option>
                                                <option>COLLEGE OF SCIENCE AND MATHEMATICS</option>
                                                <option>COLLEGE OF ARTS AND SOCIAL SCIENCE</option>
                                                <option>SCHOOL OF ENGINEERING TECHNOLOGY</option>
                                                <option>COLLEGE OF ENGINEERING AND TECHNOLOGY</option>
                                                <option>COLLEGE OF COMPUTER STUDIES</option>
                                                <option>ACCOUNTING SECTION</option>
                                                <option>ADMISSION OFFICE</option>
                                                <option>BUDGET OFFICE</option>
                                                <option>CASHIERING SECTION</option>
                                                <option>CULTURAL DEVELOPMENT OFFICE</option>
                                                <option>DEPARTMENT OF STUDENTS AFFAIRS</option>
                                                <option>DEPARTMENT OF TECHNOLOGY APPLICATION AND PROMOTION</option>
                                                <option>GUIDANCE OFFICE</option>
                                                <option>HUMAN RESOURCE MNGT. DIVISION</option>
                                                <option>ICTC-COMPUTER FACILITIES ANS SUPPORT SERVICES/option>
                                                <option>INSTITUTE LIBRARY</option>
                                                <option>INSTITUTE SECRETARY</option>
                                                <option>INTEGRATED DEVELOPMENTAL SCHOOL</option>
                                                <option>INTERNAL AUDIT SERVICES UNIT</option>
                                                <option>MANILA INFORMATION AND LIAISON OFFICE</option>
                                                <option>MEDICAL SERVICES</option>
                                                <option>MSU-IIT CENTER FOR eLEARNING</option>
                                                <option>NSTP UNIT</option>
                                                <option>OFFICE FOR ALUMNI RELATIONS AND REPLACEMENT</option>
                                                <option>OFFICE OF THE BAC SECRETARIAT</option>
                                                <option>OFFICE OF THE CHANCELLOR</option>
                                                <option>OFFICE OF THE VICE CHANCELLOR</option>
                                                <option>OFFICE OF THE VICE CHANCELLOR FOR ADMINISTRATION AND FINANCE</option>
                                                <option>OFFICE OF THE VICE CHANCELLOR FOR PLANNING AND DEVELOPMENT</option>
                                                <option>OFFICE OF THE VICE CHANCELLOR FOR RESEARCH AND EXTENSION</option>
                                                <option>PHYSICAL PLANT DIVISION</option>
                                                <option>PROPERTY AND SUPPLY OFFICE</option>
                                                <option>PURCHASING OFFICE</option>
                                                <option>REGISTRAR OFFICE</option>
                                                <option>SPORTS DEVELOPMENT OFFICE</option>
                                                <option>N/A</option>
                                            </select>
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
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Role</option>
                                                <option>Student</option>
                                                <option>Faculty</option>
                                                <option>Staff</option>
                                                <option>OPD/Dependent</option>
                                            </select>
                                        </div>
                                        <button type ="button" class = "btn btn-info">Register</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="License Number *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address *" value="" />
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