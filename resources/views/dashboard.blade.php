@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <br>
        <div class="row">
                <div class="col-sm-4">       
                        <a href="/patients/create" class="nav-link">
                            <i><img src="img/home.png" height="150px" width="150px" alt="Anne Hayathi Albiso" class="bio-image"></i>
                            <p class="card-text">Manage Patients</p>
                        </a>
                </div>
                <div class="col-sm-4">
                    <a href="/users" class="nav-link">
                        <i><img src="img/mywork.png" height="150px" width="150px" alt="Anne Hayathi Albiso" class="bio-image"></i>
                        <p class="card-text">Manage Users</p>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="index.html" class="nav-link">
                        <i><img src="img/home.png" height="150px" width="150px" alt="Anne Hayathi Albiso" class="bio-image"></i>
                        <p class="card-text">Manage Services</p>
                    </a>
    
                </div>
                <div class="col-sm-4">
                    <a href="index.html" class="nav-link">
                        <i><img src="img/mywork.png" height="150px" width="150px" alt="Anne Hayathi Albiso" class="bio-image"></i>
                        <p class="card-text">Generate Report</p>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection


