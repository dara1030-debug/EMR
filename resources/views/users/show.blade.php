@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/users">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users/create">Add New User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/users">View User... 
            <button type="button" class="close" href="/patients">&times; </button> </a>
          </li>
      </ul>
      
    </div>
    <div class="card-body">
      <img src="/img/Picture1.png" alt="create_avatar" class="create_avatar">
      <h4>Anne Hayathi Sesaldo Albiso</h4>
      <h6>ID No. 2015-8418</h6> 
      <h6>ADMIN</h6> <?ROLE?>
      
      <div class="container register"  style="margin-left: 4%">
        <div class="row justify-content-center align-items-center">
        <div class="row">           
            
                <div class="tab-content" id="myTabContent" >
                    <br><br>
                        <div class="row register-form" >
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                  <h6><i>Home Address:</h6></i>
                                  <p>Tamontaka Datu Odin Sinsuat Province Cotabato City</p>
                                </div>
                                <div class="form-group">
                                  <h6><i>Present Address:</h6></i>
                                  <p>Purok Sudlonon San Miguel, Iligan City, Lanao Del Norte</p>
                                </div>
                                <div class="form-group">
                                  <h6><i>Civil Status:</i></h6>
                                  <p>Single</p>
                                </div>
                                <div clas s="form-group">
                                  <h6><i>Gender:</i></h6>
                                  <p>Female</p>
                                </div>
                            </div>

                            <div class="col-md-6 text-left" >
                              <div class="form-group" >
                                <h6><i>Email-Address:</i></h6>
                                <p>annehayathi1@gmail.com</p>
                              </div>
                                <div class="form-group">
                                  <h6><i>Phone Number:</i></h6>
                                  <p>+63 915 565 0790</p>   
                                </div>
                                <div class="form-group">
                                  <h6><i>Age:</i></h6>
                                  <p>22</p>
                                </div>
                                <div class="form-group">
                                  <h6><i>Birth Date/Month/Year:</i></h6>
                                  <p>29-04-1997</p>
                                </div>
                                <div class="form-group">
                                  <h6><i>License Number:</i></h6>
                                  <p>LP124242424</p>
                                </div>
                                
   
                        </div>
                  </div>
                   
                 
    </div>  
  </div>
@stop